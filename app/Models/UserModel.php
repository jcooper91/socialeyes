<?php

namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel {
    
    protected $table = 'users';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function createUser($firstname, $lastname, $username, $email, $password) {
        if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) return false;
        $data = array(
          'firstname' => $firstname,  
          'lastname' => $lastname,  
          'username' => $username,  
          'mail' => $email,  
          'password' => $password,  
        );
        return $this->insertRow($data);
    }
}

