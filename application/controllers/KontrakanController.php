<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontrakanController extends CI_Controller {

	// public function index()
	// {
	// 	$data['title'] = 'Dashboard';

	// 	$this->load->view('temp_admin/header',$data);
	// 	$this->load->view('temp_admin/sidebar');
	// 	$this->load->view('admin/dashboard');
	// 	$this->load->view('temp_admin/footer');
	// }


	public function input_kontrakan()
	{
		$data['title'] = 'Tambah Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$this->load->view('kontrakan/tambah_kontrakan');
		$this->load->view('temp_admin/footer');
	}


	public function add_kontrakan()
	{	
		$unit = $this->input->post('unit');
		$nik = array('nik' => $this->session->userdata('nik'));
		$view = $this->db->get_where('pemilik',$nik)->row();
		$id = $view->id_pemilik;

		$this->db->select('RIGHT(kontrakan.kode_detail,2) as kode_detail', FALSE);
		$this->db->order_by('kode_detail', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('kontrakan');
		if($query->num_rows() <> 0)
		{
			$data = $query->row();
			$kode = intval($data->kode_detail) + 1;
		}
		else
		{
			$kode = 1;
		}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kode_tampil = "DTL".$batas;

		$data = array(
			'id_pemilik' => $id,
			'kode_detail' => $kode_tampil,
			'alamat' => $this->input->post('alamat'),
			'harga' => $this->input->post('harga'),
			'unit' => $unit
		);

		$data2 = array(
			'kode_detail' => $kode_tampil,
			'status_kontrakan' => '0'
		);

		$this->M_kontrakan->add($data,$data2,$unit);
		redirect('KontrakanController/input_kontrakan');
	}

	public function data_kontrakan()
	{
		$data['title'] = 'Data Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view'] = $this->M_kontrakan->get_kontrakan()->result();
		$this->load->view('kontrakan/data_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function detail_kontrakan($id)
	{
		$data['title'] = 'Detail Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view'] = $this->M_kontrakan->detail_kontrakan($id)->result();
		$this->load->view('kontrakan/detail_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function edit_kontrakan($id)
	{
		$data['title'] = 'Edit Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view'] = $this->M_kontrakan->get_id_kontrakan($id)->row();
		$this->load->view('kontrakan/edit_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_kontrakan()
	{
		$id = $this->input->post('id');
		$id_pemilik = $this->input->post('id_pemilik');
		$kode = $this->input->post('kode');
		$alamat = $this->input->post('alamat');
		$harga = $this->input->post('harga');
		$unit = $this->input->post('unit');

		$data = array(
			'alamat' => $alamat,
			'harga' => $harga,
			'unit' => $unit
		);

		$data2 = array(
			'kode_detail' => $kode,
			'status_kontrakan' => '0'
		);

		$where = array('id_kontrakan' => $id);

		$this->M_kontrakan->update_kontrakan($data,$data2,$where,$id,$unit);
		redirect('KontrakanController/data_kontrakan');
	}

	public function edit_deskripsi($id)
	{
		$data['title'] = 'Edit Deskripsi Kontrakan';

		$this->load->view('temp_admin/header',$data);
		$this->load->view('temp_admin/sidebar');
		$data['view'] = $this->M_kontrakan->get_id_detail_kontrakan($id)->row();
		$this->load->view('kontrakan/edit_deskripsi_kontrakan', $data);
		$this->load->view('temp_admin/footer');
	}

	public function update_deskripsi()
	{
		$data = array('keterangan' => $this->input->post('deskripsi'));

		$where = array('id' => $this->input->post('id'));
		$this->M_kontrakan->update_deskripsi($data,$where);
		redirect('KontrakanController/data_kontrakan');
	}

}
