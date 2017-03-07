<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Maler\Email;

class UsersController extends AppController
{
    var $name = "Users";
    
    var $component = array("Session");

     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('dangky', 'logout');
    }

	public function index()
    {
		    $this->viewBuilder()->layout('Lay_Out'); 
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function view($id=2)
    {
        $findtag = $this->users->get($id);
        $this->set(compact('findtag'));
    }

    public function dangky()
    {
           $this->viewBuilder()->layout(false);// không muốn kế thừa layout
             if ($this->request->is('post')) 
            {
             $users = $this->Users->newEntity($this->request->data);

                if ($this->Users->save($users))
                 {
                    $this->Flash->success(__('Your account has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your account.'));
             }
    }

    public function login()
    {
         // $email = new Email('gmail');
         //       $email
         //         ->to('conkhisat021293@gmail.com')
         //        ->subject('Hello welcome to Bùi Store @@@@@')
         //        ->send('My message test');
        if ($this->request->is('post')) {

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

   public function info(){
      if($this->Session->check("session")){//kiểm tra có session hay không
        $username = $this->Session->read('session');
        $this->set("name", $username);
      }else{
        $this->render("login");
      }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}
?>
