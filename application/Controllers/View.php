<?php

namespace App\Controllers;

class View extends \CodeIgniter\Controller
{

	protected $session;

  function __construct()
  {
      $this->session = session();
      $this->logged = $this->session->get('logged_in');
			$this->data = array(
				'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
				'baseURL' => BASE,
			);
  }

	public function index()
	{


			helper('form');
			return \Twig::instance()->display('users/index.html', $this->data);
	}

	public function login()
	{

		if($this->logged){
			return redirect('dashboard');
		}else{
			helper('form');
			$data = array(
				'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
			);
			return \Twig::instance()->display('auth/login.html', $data);
		}
	}

	public function register()
	{
		if($this->logged){
			return redirect('dashboard');
		}else{
			helper('form');
			$data = array(
				'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
			);
			return \Twig::instance()->display('auth/register.html', $data);
		}
	}

	public function dashboard()
	{

			if($this->logged){
				helper('form');
				$data = array(
					'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
				);
				return \Twig::instance()->display('admin/index.html', $data);
			}else{
				return redirect('login');
			}
	}

}
