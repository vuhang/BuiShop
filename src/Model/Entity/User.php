<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\ORM\Entity;

class User extends Entity
{

 //    protected $_accessible = [
 //      '*'=>true,
 //      'id'=>false
	// ];

    protected function _setPassword($password)
    {
    	var_dump($password);
        if (strlen($password) > 0) {
          	return (new DefaultPasswordHasher)->hash($password);
        }
    }
}

?>
