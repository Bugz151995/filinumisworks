<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index() {
		$data = [
      'title' => 'home',
      'profile_nav' => view('templates/dropdown/profile'),
    ]; 
		
		echo view('templates/header');
    echo view('templates/top_navbar', $data);
    echo view('templates/side_navbar', $data);
    echo view('users/home'); // main content of the page
    echo view('templates/footer');
	}
}