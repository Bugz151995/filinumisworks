<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Models\ApprovalRequestModel;

class Account extends BaseController {
	public function index() {
    return view('users/sign_in');
	}

  public function signOut() {
    session()->destroy();

    return redirect()->to('/');
  }

  // view any page in account entity
  public function view($page) {
    $data['validation'] = \Config\Services::validation();

    return view('users/'.$page, $data);
  }

  // create account and send email confirmation to user
  public function request() {
    $validation = \Config\Services::validation();

    if (!$this->validate($validation->getRuleGroup('signup'))) {
      $data = ['validation' => $validation];
      
      return view('users/sign_up', $data);
    } else {
      $token = $this->generateToken();
      $user_id = $this->newUser($token);

      $data = [
        'user_id' => esc($user_id),
        'token' => esc($token)
      ];

      echo $this->confirmEmail($data);
    }
  }

  // generates unique approval token used in activating the account
  // return random bytes
  public function generateToken() {
    $account_model = new AccountModel();
    
    $token = bin2hex(random_bytes(20));

    $is_unique = $account_model->isTokenUnique($token);

    while(!$is_unique) {
      $token = bin2hex(random_bytes(20));
    }

    return $token;
  }

  public function newUser($token) {
    $account_model = new AccountModel();
    
    $data = [
      'username'       => esc($this->request->getPost('username')),
      'email'          => esc($this->request->getPost('email')),
      'password'       => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'approval_token' => esc($token)
    ];

    return $account_model->createUser($data);
  }

  public function confirmEmail($data) {
    $email = \Config\Services::email();
    $activation_model = new ApprovalRequestModel();

    $email_data = [
      'message' => view('templates/email_template', ['approval_token' => $data['token']]),
      'u_email' => esc($this->request->getPost('email'))
    ];

    $email->setTo($email_data['u_email']);
    $email->setSubject('Account Verification');
    $email->setMessage($email_data['message']);//your message here

    if($email->send()){
      $msg = [
        'message' => 'You have successfully submitted your request to create account. We have sent an email confirmation to you in activating your account.'
      ];
      return view('validation_err/_display_success', $msg);
    } else {
      $user = ['user_id' => $data['user_id']];
      $activation_model->insert($user);
      $msg = [
        'message' => 'Oops! Something went wrong. Please wait for the email confirmation that will be processed by our staff to activate your account.'
      ];
      return view('validation_err/_display_error', $msg);
    }
  }

  public function activateAccount($token) {
    $account_model = new AccountModel();
    
    if($account_model->activateAccount($token)) {
      $msg = [
        'message' => 'Congratulations, you\'re all set! The account has been activated, you can now buy any of the numismatic product featured in our website.'
      ];
      return view('validation_err/_display_success', $msg);
    } else {
      $msg = [
        'message' => 'Oops! It seems like we have hit a snag!'
      ];
      return view('validation_err/_display_error', $msg);
    }
  }
}