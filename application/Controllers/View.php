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
				'satuan' => $this->session->get('user_satuan'),
				'fullname' => $this->session->get('user_fullname'),
				'tahun' => date("Y"),
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
			$message = $this->session->getFlashdata('msg');

			if($message){
				$this->data['message'] = $message;
			}
			
			$this->data['pos'] = $_SERVER['QUERY_STRING'];
			
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

	public function users()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/users/users-index.js';
					return \Twig::instance()->display('admin/users/index.html', $this->data);
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

	public function inputkegiatan()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/informasi/inputkegiatan.js';
					return \Twig::instance()->display('admin/informasi/inputkegiatan.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function berita()
	{
					helper('form');
					helper('url');

					$uri = current_url(true);

					if($_SERVER['QUERY_STRING']){
						parse_str($_SERVER['QUERY_STRING'], $get_array);
						$params = isset ($get_array['params']) ? $get_array['params']:'';
						$ids 		= isset ($get_array['ids']) ? $get_array['ids']:'';

						if(!$params || !$ids){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita.js';
							return \Twig::instance()->display('users/informasi/berita.html', $this->data);
						}

						$this->data['params'] = $params;
						$this->data['ids'] = $ids;

						if($params == 'satuan'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita-satuan.js';
							return \Twig::instance()->display('users/informasi/berita-satuan.html', $this->data);
						}else if($params == 'post'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita-post.js';
							return \Twig::instance()->display('users/informasi/berita-post.html', $this->data);
						}else{
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita.js';
							return \Twig::instance()->display('users/informasi/berita.html', $this->data);
						}
					}

					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita.js';
					return \Twig::instance()->display('users/informasi/berita.html', $this->data);
	}

	public function covid()
	{
					helper('form');
					helper('url');

					$uri = current_url(true);

					if($_SERVER['QUERY_STRING']){
						parse_str($_SERVER['QUERY_STRING'], $get_array);
						$params = isset ($get_array['params']) ? $get_array['params']:'';
						$ids 		= isset ($get_array['ids']) ? $get_array['ids']:'';

						if(!$params || !$ids){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/covid-19.js';
							return \Twig::instance()->display('users/covid-19.html', $this->data);
						}

						$this->data['params'] = $params;
						$this->data['ids'] = $ids;

						if($params == 'satuan'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/berita-satuan.js';
							return \Twig::instance()->display('users/informasi/berita-satuan.html', $this->data);
						}else if($params == 'post'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/covid-post.js';
							return \Twig::instance()->display('users/covid-post.html', $this->data);
						}else{
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/covid-19.js';
							return \Twig::instance()->display('users/covid-19.html', $this->data);
						}
					}

					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/covid-19.js';
					return \Twig::instance()->display('users/covid-19.html', $this->data);
	}

	public function kegiatan()
	{
					helper('form');
					helper('url');

					$uri = current_url(true);

					if($_SERVER['QUERY_STRING']){
						parse_str($_SERVER['QUERY_STRING'], $get_array);
						$params = isset ($get_array['params']) ? $get_array['params']:'';
						$ids 		= isset ($get_array['ids']) ? $get_array['ids']:'';

						if(!$params || !$ids){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/kegiatan.js';
							return \Twig::instance()->display('users/informasi/kegiatan.html', $this->data);
						}

						$this->data['params'] = $params;
						$this->data['ids'] = $ids;

						if($params == 'satuan'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/kegiatan-satuan.js';
							return \Twig::instance()->display('users/informasi/kegiatan-satuan.html', $this->data);
						}else if($params == 'post'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/kegiatan-post.js';
							return \Twig::instance()->display('users/informasi/kegiatan-post.html', $this->data);
						}else{
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/kegiatan.js';
							return \Twig::instance()->display('users/informasi/kegiatan.html', $this->data);
						}
					}

					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/informasi/kegiatan.js';
					return \Twig::instance()->display('users/informasi/kegiatan.html', $this->data);
	}


	public function satuan()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/satuan/satuan-index.js';
					return \Twig::instance()->display('admin/satuan/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function mutasi()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/mutasi/mutasi-index.js';
					return \Twig::instance()->display('admin/mutasi/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function tabulasi()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/tabulasi/tabulasi-index.js';
					return \Twig::instance()->display('admin/tabulasi/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function supervisi()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/supervisi/supervisi-index.js';
					return \Twig::instance()->display('admin/supervisi/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function cctv()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/cctv/cctv-index.js';
					return \Twig::instance()->display('admin/cctv/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function satuan1()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/satuan/satuan-index.js';
					return \Twig::instance()->display('admin/satuan/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function profile()
	{
					helper('form');
					helper('url');

					$uri = current_url(true);

					if($_SERVER['QUERY_STRING']){
						parse_str($_SERVER['QUERY_STRING'], $get_array);
						$params = isset ($get_array['params']) ? $get_array['params']:'';
						$ids 		= isset ($get_array['ids']) ? $get_array['ids']:'';

						if(!$params || !$ids){
							return redirect('home');
						}

						$this->data['params'] = $params;
						$this->data['ids'] = $ids;
						if($params == 'kapolres'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/kapolres.html', $this->data);
						}else if($params == 'visi-misi'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/visi-misi.html', $this->data);
						}else if($params == 'struktur-organisasi'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/struktur-organisasi.html', $this->data);
						}else if($params == 'tentang'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/tentang.html', $this->data);
						}
					}

					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/home.js';
					$this->data['page'] = 'home';
					return \Twig::instance()->display('users/index.html', $this->data);

	}

	public function beritacovid()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/covid19/beritacovid.js';
					return \Twig::instance()->display('admin/covid19/beritacovid.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function pelayanan()
	{
					helper('form');
					helper('url');

					$uri = current_url(true);

					if($_SERVER['QUERY_STRING']){
						parse_str($_SERVER['QUERY_STRING'], $get_array);
						$params = isset ($get_array['params']) ? $get_array['params']:'';
						$ids 		= isset ($get_array['ids']) ? $get_array['ids']:'';

						// if(!$params || !$ids){
						// 	return redirect('home');
						// }

						$this->data['params'] = $params;
						$this->data['ids'] = $ids;
						if($params == 'kapolres'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/kapolres.html', $this->data);
						}else if($params == 'visi-misi'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/visi-misi.html', $this->data);
						}else if($params == 'struktur-organisasi'){
							$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/profile/profile.js';
							return \Twig::instance()->display('users/profile/struktur-organisasi.html', $this->data);
						}
					}

					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/pelayanan/pelayanan.js';
					$this->data['page'] = $params;
					return \Twig::instance()->display('users/pelayanan/pelayanan.html', $this->data);

	}

	public function listpelayanan()
	{
				if($this->logged){
					helper('form');
					$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/pelayanan/pelayanan-index.js';
					return \Twig::instance()->display('admin/pelayanan/index.html', $this->data);
				}else{
					return redirect('home');
				}
	}

	public function lapor()
	{
			helper('form');
			$this->data['script'] = $this->data['baseURL'].'/assets/action-js/users/lapor.js';
			return \Twig::instance()->display('users/lapor.html', $this->data);
	}

	public function kawalcovid()
	{
				helper('form');
				return \Twig::instance()->display('kawalcovid.html', $this->data);

	}

	public function laporkerumunan()
	{
		if($this->logged){
			helper('form');
			$this->data['script'] = $this->data['baseURL'].'/assets/action-js/admin/covid19/laporkerumunan.js';
			return \Twig::instance()->display('admin/covid19/laporkerumunan.html', $this->data);
		}else{
			return redirect('home');
		}
	}

}
