<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Valadition\Valadition;
 class ListsTable extends Table
 {
 	public function initialize(array $config)
 	{
 		//$this-> addBehavior('Timetamp');
 		// liên kết
 		$this->belongsTo('Products',[
 			'className'=>'Products',
 			'foreignKey'=>'id_tm']);
 	}
 	public function findalldl($id)
 	{
 		$query=$this->find('all',['conditions'=>['Lists.id'=>$id]]);
 		return $query;
 	}
 }
?>