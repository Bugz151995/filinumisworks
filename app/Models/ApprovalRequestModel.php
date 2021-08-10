<?php

namespace App\Models;

use CodeIgniter\Model;

class ApprovalRequestModel extends Model {
  protected $table         = 'activation_requests';
  protected $primaryKey    = 'activation_request_id';
  protected $returnType     = 'array';

  protected $allowedFields = ['user_id'];
}