<?php

namespace App\Controllers;

class Consignment extends BaseController {
  public function index() {
    $data = [
      'profile_nav' => view('templates/dropdown/profile_nav'),
    ]; 
    
    echo view('templates/header');
    echo view('templates/top_navbar', $data);
    echo view('templates/side_navbar');
    echo view('users/consignments/item'); // main content of the page
    echo view('templates/footer');
  }
}