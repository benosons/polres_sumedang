<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controller\BaseController;

class Auth extends \CodeIgniter\Controller
{

	public function auth()
	{

			$session = session();
			$model = new UserModel();

			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$data = $model->getWhere(['user_email' => $email])->getRow();

			if($data){
					$pass = $data->user_password;
					$hash =  substr_replace($pass, "$2y$10", 0, 1);
					$verify_pass = password_verify($password, $hash);
					if($verify_pass){
							$ses_data = [
									'user_id'       => $data->user_id,
									'user_name'     => $data->user_name,
									'user_email'    => $data->user_email,
									'logged_in'     => TRUE
							];
							$session->set($ses_data);
							return redirect('dashboard');
					}else{
							$session->setFlashdata('msg', 'Wrong Password');
							return redirect('login');
					}
			}else{
					$session->setFlashdata('msg', 'Email not Found');
					return redirect('login');
			}
	}

	public function reg()
	{
		//include helper form
		helper('form');
		//set rules validation form
		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[20]',
			'email' 		=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
			'password' 		=> 'required|min_length[6]|max_length[200]',
			'confpassword' 	=> 'matches[password]'
		];

		// if($this->validate($rules)){
			$model = new UserModel();
			$data = [
				'user_name' 	=> $this->request->getVar('name'),
				'user_email' 	=> $this->request->getVar('email'),
				'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			// print_r($this->request->getVar('password'));die;
			$model->save($data);
			return redirect('login');
		// }else{
		// 	$data['validation'] = $this->validator;
		// 	echo view('register', $data);
		// }

	}

	public function logout()
	{
			$session = session();
			$session->destroy();
			return redirect('home');
	}

}