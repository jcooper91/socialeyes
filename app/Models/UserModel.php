<?php

namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel {
    
    protected $table = 'users';
    
    public function __construct() {
        parent::__construct();
    }
    
    private function hash_password($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    
    public function createUser($firstname, $lastname, $username, $email, $password) {
        if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) return false;
        $password = $this->hash_password($password);
        $validation = $this->generateToken($email);
        // need to add validation to database
        $data = array(
          'firstname' => $firstname,  
          'lastname' => $lastname,  
          'username' => $username,  
          'email' => $email,  
          'password' => $password,  
        );
        return $this->insertRow($data);
    }
}

