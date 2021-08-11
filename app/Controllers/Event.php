<?php

namespace App\Controllers;

class Event extends BaseController {
  public function index() {
    $data = [
      'profile_nav' => view('templates/dropdown/profile_nav'),
    ]; 
    
    echo view('templates/header');
    echo view('templates/top_navbar', $data);
    echo view('templates/side_navbar');
    echo view('users/events/lot'); // main content of the page
    echo view('templates/footer');
  }
}