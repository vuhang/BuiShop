<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class SanphamsController extends AppController
{
    public function beforeRender(Event $event){
        parent::beforeRender($event);
        $this->viewBuilder()->layout('Lay_Out'); 

    }

	public function index($alias) {
        $kqload = $this->Sanphams->find('all');
        $this->set(compact('kqload'));
    }
    
    public function view($id = 2)
    {
        $findtag = $this->Sanphamshams->get($id);
        $this->set(compact('findtag'));
    }

    public function add()
    {	
        if ($this->request->is('post')) {
    		$article = $this->Sanphams->newEntity($this->request->data);
            //$article = $this->Tags->patchEntity($article, $this->request->data);
            if ($this->Sanphams->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }

    public function edit($id)
    {
        $article = $this->Sanphams->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this-> request->data ['id']=$id;
            $test=$this->Sanphams->patchEntity($article, $this->request->data);
            if ($this->Sanphams->save($test)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }

        $this->set('article', $article);
    }

    public function sanphammoi()
    {
    $sp = $this->Sanphams->find('all');
        $this->set('sp', $this->paginate($sp,['limit' => 8,
         'order' => [
            
             'sanphams.id' => 'asc'
         ]]));
    }
    public function chitietsanpham($id)
    {
        $sp = $this->Sanphams->get($id);
        $this->set(compact('sp'));
    }
    public function getsanpham($id)
    {
       $sp = $this->Sanphams->find('all',['conditions' => ['Sanphams.id_dm' =>$id]]);
        $this->set('sp', $this->paginate($sp,['limit' => 8,
         'order' => [
             'Sanphams.id_dm' => 'asc'
         ]]));
    }
}
    

?>