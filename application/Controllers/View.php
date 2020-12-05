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
				'baseURL' => BASE.'/public',
				// 'baseURL' => BASE,
				'username' => $this->session->get('user_name'),
				'role' => $this->session->get('user_role'),
			);
  }

	public function index()
	{

			return redirect('home');
	}

	public function home()
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
			return \Twig::instance()->display('auth/login.html', $this->data);
		}
	}

	public function register()
	{
		if($this->logged){
			return redirect('dashboard');
		}else{
			helper('form');
			return \Twig::instance()->display('auth/register.html', $this->data);
		}
	}

	public function dashboard()
	{

			if($this->logged){
				helper('form');
				return \Twig::instance()->display('admin/index.html', $this->data);
			}else{
				return redirect('home');
			}
	}

}
