<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController {

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