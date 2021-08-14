<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\I18n\Time;

class FeaturedLotModel extends Model {
  protected $table         = 'featured_lots';
  protected $primaryKey    = 'featured_lot_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'featured_lot_id', 'selected_at', 'expires_at'
  ];

  public function getFeaturedLots() {
    $my_time = new Time('now', 'Asia/Manila', 'en_US');
    
    $db      = \Config\Database::connect();
    $builder = $db->table('featured_lots');
    return $builder->where('expires_at >=', $my_time)
                   ->where('selected_at <=', $my_time)
                   ->select('lot_id')
                   ->get()
                   ->getResult();
  }
}