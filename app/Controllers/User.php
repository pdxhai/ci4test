<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
  public $data = [];

	public function index()
	{
		$this->data['view'] = 'welcome_message';
		return view('layout', $this->data);
	}

  public function login()
	{
    if($this->request->getMethod() == 'post')
    {
      if(!$this->validate([
        'username' => ['label' => 'Username', 'rules' => 'required'],
        'password' => ['label' => 'Password', 'rules' => 'required'],
      ]))
      {
        $this->data['errors'] = $this->validator->getErrors();
      }
      else
      {
        set_cookie('login', md5($this->request->getVar('password')), time() + 86400);
        return redirect()->to('/');
      }
    }
		$this->data['view'] = 'user/login';
		return view('layout', $this->data);
	}

  public function logout()
	{
    delete_cookie('login');
		return redirect()->to('/');
	}

  public function signup()
	{
		$this->data['view'] = 'user/signup';
		return view('layout', $this->data);
	}

  public function forgot_password()
	{
		$this->data['view'] = 'user/forgot-password';
		return view('layout', $this->data);
	}

}
