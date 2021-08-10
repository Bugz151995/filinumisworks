<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
  protected $table         = 'users';
  protected $primaryKey    = 'user_id';
  protected $returnType     = 'array';
  
  protected $allowedFields = [
    'username', 'last_name', 'first_name', 'middle_name', 'name_extension', 'fb_link', 'c_num', 'street', 'barangay', 'ct_mun', 'province', 'zip_code', 'email', 'user_img', 'privilege'
  ];

  public function getUser($username) {
    $db = \Config\Database::connect();
    $builder = $db->table('users');

    $query = $builder->where('username', $username)
                     ->select($this->allowedFields)
                     ->get();
    return $query->getRowArray();
  }
}