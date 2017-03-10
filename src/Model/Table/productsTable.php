<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
class ProductsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->hasMany('Lists',['className'=>'Lists',]);
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title');

        return $validator;
    }
}
?>