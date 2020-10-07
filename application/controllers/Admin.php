<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('temp_admin/footer');
	}


	public function data_pemilik_kontrakan()
	{
		$data['title'] = 'Data Pemilik Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/data_pemilik_kontrakan');
		$this->load->view('temp_admin/footer');
	}


	public function data_tempat_kontrakan()
	{
		$data['title'] = 'Data Tempat Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('admin/data_tempat_kontrakan');
		$this->load->view('temp_admin/footer');
	}


	public function input_data_pemilik()
	{	
		$data = array(
			'nama_pemilik_kontrakan' => $this->input->post('nama_pemilik_kontrakan'),
			'nama_jalan_pemilik' => $this->input->post('nama_jalan_pemilik'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'jk' => $this->input->post('jk'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp')
		);

		$this->m_admin->insert_data($data,'pemilik');
		redirect('admin/data_pemilik_kontrakan');

	}





		public function test()
	{
		$data['title'] = 'Data Tempat Kontrakan';

		$this->load->view('temp_superadmin/header',$data);
		$this->load->view('temp_superadmin/sidebar');
		$this->load->view('superadmin/data_map_kontrakan');
		$this->load->view('temp_superadmin/footer');
	}






}
