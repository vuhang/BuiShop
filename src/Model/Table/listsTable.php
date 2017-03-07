<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Valadition\Valadition;
 class ListsTable extends Table
 {
 	public function initialize(array $config)
 	{
 		$this-> addBehavior('Timetamp');
 		// liên kết
 		$this->belongsTo('Sanphams',[
 			'className'=>'Sanphams',
 			'foreignKey'=>'id_dm']);
 	}
 	public function findalldl($id)
 	{
 		$query=$this->find('all',['conditions'=>['list.id_dm'=>$id]]);
 		return $query;
 	}
 }
?>