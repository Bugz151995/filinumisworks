<?php

namespace App\Controllers;

use App\Models\FeaturedItemModel;
use App\Models\ConsignmentModel;
use App\Models\FeaturedLotModel;
use App\Models\LotModel;

class Home extends BaseController
{
	public function index() {
    
    $feat_item_model   = new FeaturedItemModel();
    $consignment_model = new ConsignmentModel();
    $feat_lot_model    = new FeaturedLotModel();
    $lot_model         = new LotModel();

    $feat_items = $feat_item_model->getFeaturedItems();

    $items['consignments'] = array();
    foreach ($feat_items as $key => $feat_item) {
      $res = $consignment_model->getConsignment($feat_item->item_id);
      array_push($items['consignments'], $res);
    }
    
    $feat_lots = $feat_lot_model->getFeaturedLots();

    $items['lots'] = array();
    foreach ($feat_lots as $key => $feat_lot) {
      $res = $lot_model->getLot($feat_lot->lot_id);
      array_push($items['lots'], $res);
    }

		$data = [
      'profile_nav' => view('templates/dropdown/profile_nav'),
    ];

		echo view('templates/header');
    echo view('templates/top_navbar', $data);
    echo view('templates/side_navbar');
    echo view('users/home', $items); // main content of the page
    echo view('templates/footer');
	}
}