<?php

namespace App\Models;

use CodeIgniter\Model;

class LotModel extends Model {
  protected $table         = 'lots';
  protected $primaryKey    = 'lot_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'reserve_price', 'estimate', 'increment', 'name', 'composition', 'weight', 'diameter', 'note_description', 'image', 'starts_at', 'expires_at','shop_id'
  ];

  public function getLot($lot_id) {
    $lot = [
      'reserve_price', 'estimate', 'increment', 'name', 'composition', 'weight', 'diameter', 'note_description', 'image', 'starts_at', 'expires_at','shop_id'
    ];

    $db      = \Config\Database::connect();
    $builder = $db->table('lots');
    return $builder->where('lot_id', $lot_id)
                   ->select($lot)
                   ->get()
                   ->getRowArray(0);
  }
}