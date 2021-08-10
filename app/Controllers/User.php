<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController {
	// property and actions of user
  // user can buy, bid, add item to cart, add lot to watchlist
  
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

  public function verifyUser() {
    $validation = \Config\Services::validation();
    $user_model = new UserModel();

    if (!$this->validate($validation->getRuleGroup('signin'))) {
      
      return view('users/sign_in', [
        'validation' => $this->validator
      ]);      
    }
    else {
      $data = $user_model->getUser($this->request->getPost('username'));
      
      session()->set($data);
      session()->set('logged_in', TRUE);
      return redirect()->to('/');
    }
  }
}