<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class listController extends AppController
{
	
    public function getListtype(){
   	$type = $this->list->find('all');
         $this->set(compact('type'));
 }
}
?>