<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemilikController extends CI_Controller {

	// public function index()
	// {
	// 	$data['title'] = 'Dashboard';

	// 	$this->load->view('temp_admin/header',$data);
	// 	$this->load->view('temp_admin/sidebar');
	// 	$this->load->view('admin/dashboard');
	// 	$this->load->view('temp_admin/footer');
	// }


	public function input_pemilik()
	{
		$data['title'] = 'Tambah Pemilik Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('pemilik/tambah_pemilik_kontrakan');
		$this->load->view('temp_admin/footer');
	}


	public function add_pemilik()
	{	
		$data = array(
			'nik' => $this->session->userdata('nik'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'nama_jalan_pemilik' => $this->input->post('nama_jalan_pemilik'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'jk' => $this->input->post('jk'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp')
		);

		$this->M_pemilik->add($data);
		redirect('PemilikController/input_pemilik');
	}

	public function data_pemilik_kontrakan()
	{
		$data['title'] = 'Data Pemilik Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view'] = $this->M_pemilik->get_pemilik()->result();
		$this->load->view('pemilik/data_pemilik_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function edit_pemilik_kontrakan($id)
	{
		$data['title'] = 'Edit Pemilik Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view_jk'] = $this->db->get('pemilik')->result();
		$data['view'] = $this->M_pemilik->get_id_pemilik($id)->row();
		$this->load->view('pemilik/edit_pemilik_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_pemilik()
	{
		$data = array(
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'nama_jalan_pemilik' => $this->input->post('nama_jalan_pemilik'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'jk' => $this->input->post('jk'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp')
		);

		$where = array('id_pemilik' => $this->input->post('id'));

		$this->M_pemilik->update($data,$where);
		redirect('PemilikController/edit_pemilik_kontrakan/'.$this->input->post('id'));
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
