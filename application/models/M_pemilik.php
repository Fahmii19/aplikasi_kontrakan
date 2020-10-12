<?php 

class M_pemilik extends CI_Model{

	public function add($data)
	{
		$this->db->insert('pemilik', $data);
	}

	public function get_pemilik()
	{
		return $this->db->get('pemilik');
	}

	public function get_id_pemilik($id)
	{
		return $this->db->get_where('pemilik', ['id_pemilik' => $id]);
	}

	public function update($data,$where)
	{
		$this->db->where($where);
		$this->db->update('pemilik', $data);
	}

}

?>