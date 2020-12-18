<?php namespace App\Controllers;

class View extends \CodeIgniter\Controller
{

	protected $session;

  function __construct()
  {
      $this->session = session();
			$this->now = date('Y-m-d H:i:s');
      $this->logged = $this->session->get('logged_in');
			$this->data = array(
				'version' => \CodeIgniter\CodeIgniter::CI_VERSION,
				'baseURL' => BASE.'/public',
				// 'baseURL' => BASE,
				'userid' => $this->session->get('user_id'),
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
			$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/home.js';
			$this->data['page'] = 'home';
			return \Twig::instance()->display('users/index.html', $this->data);
	}

	public function login()
	{

		if($this->logged){
			return redirect('dashboard');
		}else{
			helper('form');
			$message = $this->session->get('msg');
			if($message){
				$this->data['message'] = $message;
			}
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
				$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/index.js';
				return \Twig::instance()->display('admin/index.html', $this->data);
			}else{
				return redirect('home');
			}
	}

	public function kirimpengaduan()
	{
				helper('form');
				$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/pengaduan.js';
				return \Twig::instance()->display('users/pengaduan/index.html', $this->data);
	}

	public function datapengaduan()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/pengaduan/data.js';
					return \Twig::instance()->display('admin/pengaduan/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}


	public function userprofile()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/users/profile.js';
					return \Twig::instance()->display('admin/users/profile.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function inputberita()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/informasi/inputberita.js';
					return \Twig::instance()->display('admin/informasi/inputberita.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function berita()
	{
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita.js';
					return \Twig::instance()->display('users/informasi/berita.html', $this->data);
	}


}
