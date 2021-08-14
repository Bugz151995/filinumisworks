<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsignmentModel extends Model {
  protected $table         = 'consignments';
  protected $primaryKey    = 'consignment_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'price', 'consignment_fee', 'name', 'composition', 'weight', 'diameter', 'note_description', 'image', 'shop_id'
  ];

  public function getConsignment($item_id) {
    $consignment = [
      'price', 'name', 'composition', 'weight', 'diameter', 'note_description', 'image', 'shop_id'
    ];
    $db      = \Config\Database::connect();
    $builder = $db->table('consignments');
    return $builder->where('consignment_id', $item_id)
                   ->select($consignment)
                   ->get()
                   ->getRowArray(0);
  }
}