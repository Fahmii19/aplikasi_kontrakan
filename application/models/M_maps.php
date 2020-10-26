<?php 

class M_maps extends CI_Model{

	public function get_maps()
	{
		return $this->db->get('kontrakan');
	}

	public function get_id_maps($id)
	{
		return $this->db->get_where('kontrakan', ['id_kontrakan' => $id]);
	}

	public function get_id_maps2()
	{	
		$nik = $this->session->userdata('nik');
		$view = $this->db->get_where('pemilik', ['nik' => $nik])->row();
		$id = $view->id_pemilik;
		return $this->db->get_where('kontrakan', ['id_pemilik' => $id]);
	}

	public function update_latlong($data, $where)
	{
		$this->db->where($where);
		$this->db->update('kontrakan', $data);
	}

}

?>