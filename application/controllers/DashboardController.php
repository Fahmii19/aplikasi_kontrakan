<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('dashboard');
		$this->load->view('temp_admin/footer');
	}

}
