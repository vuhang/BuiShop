<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    var $name = "User";

    // public function beforeSave(Event $event)
    // {
    //     $entity = $event->getData('entity');

    //     if ($entity->isNew()) {
    //         $hasher = new DefaultPasswordHasher();
    //     }
    //     return true;
    // }
   // public function checkLogin($username,$password){
   //   $sql = "Select username,password from users where username='$username' AND password ='$password'";
   //   $this->query($sql);
   //   if($this->getNumRows()==0){
   //     return false;
   //   }else{
   //     return true;
   //   }
   // }

}

?>