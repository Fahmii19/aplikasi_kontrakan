<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	// public function index()
	// {
	// 	$data['title'] = 'Dashboard';

	// 	$this->load->view('temp_admin/header',$data);
	// 	$this->load->view('temp_admin/sidebar');
	// 	$this->load->view('admin/dashboard');
	// 	$this->load->view('temp_admin/footer');
	// }

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function add_register()
	{
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => 'ADMIN'
		);

		$this->M_auth->add($data);
	}

	public function cek_login()
	{
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);

		$hasil = $this->M_auth->get($data);
		if($hasil){
			$data = [
				'logged_in' => true,
				'id_login' => $hasil['id_login'],
				'username' => $hasil['username'],
				'password' => $hasil['password'],
				'nik' => $hasil['nik'],
				'level' => $hasil['level']
			];
			$this->session->set_userdata($data);
			if($hasil['level'] == 'ADMIN'){
				redirect('DashboardController');
			} else if($hasil['level'] == 'SUPER ADMIN'){
				redirect('DashboardController');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">user is not registered</div>');
			redirect('AuthController');
		}
	}

}
