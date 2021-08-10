<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\SignInRules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		SignInRules::class
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
		'error_list'=> 'validation_err\_errors_list',
		'error_single'=> 'validation_err\_errors_single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $signup = [
		'email'    => [
			'rules'  => 'required|is_unique[users.email]',
			'errors' => [
				'required'  => 'Please enter your email',
				'is_unique' => 'The email has been used'
			]
		],
		'username' => [
			'rules'  => 'required|is_unique[users.username]|min_length[5]|max_length[12]',
			'errors' => [
				'required'   => 'Please enter your username',
				'is_unique'  => 'The username has been used',
				'min_length' => '5 to 12 letters and numbers only',
				'max_length' => '5 to 12 letters and numbers only',
			]
		],
		'password' => [
			'rules'  => 'required',
			'errors' => [
				'required'  => 'Please enter your password'
			]
		],
		'passwordconf' => [
			'rules'  => 'required|matches[password]',
			'errors' => [
				'required' => 'Please confirm your password',
				'matches'  => 'The password does not match'
			]
		],
		'accept' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Please check this checkbox to proceed.'
			]
		]
	];

	public $signin = [
		'username' => [
			'rules'  => 'required',
			'errors' => ['required' => '']
		],
		'password' => [
			'rules'  => 'required|signin_attempt|verify_user[username, password]',
			'errors' => [
				'required'    => 'Please enter your username or password.',
				'signin_attempt' => 'Max sign-in attempt, Please try again in a minute.',
				'verify_user' => 'The username or password don\'t match.'
			]
		]
	];
}