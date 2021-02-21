<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Login extends \App\Controllers\BaseController
{

	public function index()
	{
		$data['sitename'] = $this->site->GetSite('sitename');

		return view('admin/login/login', $data);
	}
}


