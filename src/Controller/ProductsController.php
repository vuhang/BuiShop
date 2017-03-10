<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class ProductsController extends AppController
{
    public function initialize()
    {
        parent :: initialize();
        $this->Auth->allow();
        $this->loadModel('Departments');
    }
    
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('Lay_Out'); 

    }

	public function index($alias) {
        $kqload = $this->Products->find('all');
        $this->set(compact('kqload'));
    }
    
    public function view($id = 2)
    {
        $findtag = $this->Products->get($id);
        $this->set(compact('findtag'));
    }

    public function add()
    {	
        if ($this->request->is('post')) {
    		$article = $this->Products->newEntity($this->request->data);
            //$article = $this->Tags->patchEntity($article, $this->request->data);
            if ($this->Products->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }

    public function edit($id)
    {
        $article = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this-> request->data ['id']=$id;
            $test=$this->Products->patchEntity($article, $this->request->data);
            if ($this->Products->save($test)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }

        $this->set('article', $article);
    }

    public function sanphammoi()
    {
        $sp = $this->Products->find('all');
       // var_dump($sp);die;
        $this->set('sp', $this->paginate($sp,['limit' => 4,
         'order' => [ 
             'products.id' => 'asc'
         ]]));
        
    }
    public function details($id)
    {
        $sp = $this->Products->get($id);
        $this->set(compact('sp'));
    }
    public function getproduct($id)
    {
       $sp = $this->Products->find('all',['conditions' => ['products.id_tm' =>$id]]);
        $this->set('sp', $this->paginate($sp,['limit' => 4,
         'order' => [
             'products.id_tm' => 'asc'
         ]]));
    }
}
    

?>