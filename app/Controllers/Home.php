<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$data['view'] = 'welcome_message';
		return view('layout', $data);
	}

	//--------------------------------------------------------------------

}
