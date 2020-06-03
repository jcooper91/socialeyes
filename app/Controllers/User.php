<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends BaseController {
    
    public function __construct() {
         parent::__construct();
     }

     public function index() {

         return view('login');
     }

     public function signup() {
         $data = array();
         $userModel = model('UserModel');

         $action = $this->request->getPost('action');
         if(!empty($action) && $action === 'signup') {
             $firstname = $this->request->getPost('firstname');
             $lastname = $this->request->getPost('lastname');
             $username = $this->request->getPost('username');
             $email = $this->request->getPost('email');
             $password = $this->request->getPost('password');
             $confirm_pssword = $this->request->getPost('confirm_pssword');
             if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($confirm_pssword)) {
                 $response = array(
                     'class' => 'warning',
                     'title' => 'All fields required',
                     'mgs'   => 'Please make sure you have filled out all fields when signing up'
                 );
                  $this->session->setFlashdata(get_class($this), $response);
             }
             $userModel->createUser($firstname, $lastname, $username, $email, $password);
         }

         $data['page_title'] = 'Create User';
         return view('user/signup');
     }
}