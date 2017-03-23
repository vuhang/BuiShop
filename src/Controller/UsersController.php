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
    public function initialize()
    {
        parent::initialize();
    }
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('dangky', 'logout');
    }

	public function index()
    {
		$this->viewBuilder()->layout(false); 
        $users = $this->Users->find('all');
        // var_dump($users);die;
        $this->set(compact('users'));
        $this->set('users', $this->paginate($users,['limit' => 4,
         'order' => [ 
             'users.id' => 'asc'
         ]]));
    }

    public function view($id=2)
    {
        $findtag = $this->users->get($id);
        $this->set(compact('findtag'));
    }

    public function dangky()
    {
           $this->viewBuilder()->layout(false);
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
        $this->viewBuilder()->layout(false);
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
    public function edit($id)
    {
        $this->viewBuilder()->layout(false);
        $users = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->request->data['id']=$id;
            // pr($id);die();
            $moi=$this->Users->patchEntity($users, $this->request->data);
            if ($this->Users->save($moi)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('users', $users);
    }
    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $users = $this->Users->get($id);
        if ($this->Users->delete($users)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }

}
?>
