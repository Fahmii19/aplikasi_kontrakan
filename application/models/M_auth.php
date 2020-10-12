<?php 

class M_auth extends CI_Model{

	public function add($data){
		return $this->db->insert('login', $data);
	}

	public function get($data){
		return $this->db->get_where('login', $data)->row_array();
	}

}

?>