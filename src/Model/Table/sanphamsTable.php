<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
class SanphamsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->hasMany('list',['className'=>'list',]);
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title');

        return $validator;
    }
}
?>