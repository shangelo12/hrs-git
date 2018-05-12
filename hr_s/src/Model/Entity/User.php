<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; 
use Cake\ORM\Entity;

class User extends Entity
{

    

    protected $_accessible = [
        'username' => true,
        'password' => true
    ];

    
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) { 
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }

}