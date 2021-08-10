<?php

namespace App\Validation;

use App\Models\AccountModel;

class SignInRules {
  public function verify_user(string $str, string $fields, array $data) : bool {
    $account_model = new AccountModel();

    $user = $account_model->where('username', $data['username'])
                    ->first();

    return (!$user) ? FALSE : password_verify($data['password'], $user['password']);
  }

  public function signin_attempt(string $str) {
    $throttler = \Config\Services::throttler();
    $allow = $throttler->check('sign_in', 3, MINUTE);

    return $allow;
  }
}