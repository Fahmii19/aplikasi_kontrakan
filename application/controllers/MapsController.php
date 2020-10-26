<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapsController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function maps()
	{
		$data['title'] = 'Maps';

		$this->load->view('temp_superadmin/header',$data);
		$this->load->view('temp_superadmin/sidebar');
		$data['view'] = $this->M_maps->get_id_maps2()->result();
		$this->load->view('maps/maps' ,$data);
		$this->load->view('temp_superadmin/footer');
	}
	
	public function edit_maps($id)
	{
		$data['title'] = 'Maps';

		$this->load->view('temp_superadmin/header',$data);
		$this->load->view('temp_superadmin/sidebar');
		$data['view'] = $this->M_maps->get_id_maps2()->result();
		$data['v_edit'] = $this->M_maps->get_id_maps($id)->row();
		$this->load->view('maps/edit_maps' ,$data);
		$this->load->view('temp_superadmin/footer');
	}

	public function data_latlong()
	{
		$data['view'] = $this->M_maps->get_id_maps2()->result();
		$this->load->view('maps/data_latlong', $data);
	}

	public function update_latlong()
	{
		$data = array(
			'latitude' => $this->input->post('lat'),
			'longitude' => $this->input->post('long')
		);

		$where = array('id_kontrakan' => $this->input->post('id'));

		$this->M_maps->update_latlong($data, $where);
		redirect('MapsController/index/'.$this->input->post('id'));
	}

	public function kontrakan_json()
	{
		$data = $this->M_maps->get_maps()->result();
		echo json_encode($data);
	}

}
