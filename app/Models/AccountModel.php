<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model {
  protected $table         = 'users';
  protected $primaryKey    = 'user_id';
  protected $returnType     = 'array';

  protected $allowedFields = ['username', 'email', 'password', 'approval_token'];

  // param $data is array [username, email, password]
  // return user id if the email sending failed
  // use the user id to request admin for account approval
  public function createUser($data) {
    $db = \Config\Database::connect();

    $builder = $db->table('users');
    $builder->insert($data);
    return $db->insertID();
  }

  // param $token [token]
  // activate account of the user validating the token of the user
  // return bool
  public function activateAccount($token) {
    $status = [
      'approval_status' => 1,
      'privilege'       => 1
    ];

    $db = \Config\Database::connect();
    $builder = $db->table('users');

    return $builder->where('approval_token', $token)
                   ->update($status);
  }

  // param $token [token]
  public function isTokenUnique($token) {
    $db = \Config\Database::connect();
    $builder = $db->table('users');

    $query = $builder->where('approval_token', $token)
                     ->selectCount('approval_token')
                     ->get();
    return ($query->getRow('approval_token') > 0) ? FALSE : TRUE;                    
  }
}