<?php

class Home extends Controller
{
	public function index()
	{
		$userModel = $this->model('User');
		$data['users'] = $userModel->selectAll('users');

		$this->view('home/index',['users' => $data['users']]);
	}

	public function create()
	{
		$this->view('home/add_user');
	}

	public function save()
	{
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];

		$userModel = $this->model('User');
		if($userModel->saveUser($Username,$Password))
		{
			print('sakses');
		}
		else
		{
			print('failed');
		}

		$this->index();
	}

}