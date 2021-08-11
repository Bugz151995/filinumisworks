<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function view($page = NULL) {
    $data = [
      'profile_nav' => view('templates/dropdown/profile_nav'),
    ]; 

    if($page === NULL) {      
      echo view('templates/header');
      echo view('templates/top_navbar', $data);
      echo view('templates/side_navbar');
      echo view('users/home'); // main content of the page
      echo view('templates/footer');
    }

		echo view('templates/header');
    echo view('templates/top_navbar', $data);
    echo view('templates/side_navbar');
    echo view('users/'.$page); // main content of the page
    echo view('templates/footer');
	}
}