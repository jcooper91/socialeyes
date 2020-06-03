<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model {
    
    protected $builder = null;
    
    public function __construct() {
        parent::construct();
        $this->builder = $this->db->table($this->table);
    }
    
    public function __destruct() {
        $this->builder = null;
    }
    
    protected function generateToken($salt = null) {
        return md5(time() . 'social'  .mt_rand(0,99) . 'eyes' . $salt);
    }
    
    protected function insertRow($data) {
        $query = $this->builder->insert($data);
        if(empty($query)) return false;
        return $this->db->insertID();
    }
}