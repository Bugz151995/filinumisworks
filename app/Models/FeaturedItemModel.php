<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\I18n\Time;

class FeaturedItemModel extends Model {
  protected $table         = 'featured_items';
  protected $primaryKey    = 'featured_item_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'featured_item_id', 'selected_at', 'expires_at'
  ];

  public function getFeaturedItems() {
    $my_time = new Time('now', 'Asia/Manila', 'en_US');
    $db      = \Config\Database::connect();
    $builder = $db->table('featured_items');
    return $builder->where('expires_at >=', $my_time)
                   ->where('selected_at <=', $my_time)
                   ->select('item_id')
                   ->get()
                   ->getResult();
  }
}