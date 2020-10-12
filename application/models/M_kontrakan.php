<?php 

class M_kontrakan extends CI_Model{

	public function add($data,$data2,$unit)
	{
		$query = $this->db->insert('kontrakan', $data);
		if($query == TRUE){
			for($i=1; $i <= $unit; $i++){
				$this->db->insert('detail_kontrakan', $data2);
			}
		}
	}

	public function get_kontrakan()
	{	
		$this->db->select('*');
		$this->db->from('kontrakan');
		$this->db->join('pemilik', 'pemilik.id_pemilik=kontrakan.id_pemilik');
		return $this->db->get();
	}

	public function detail_kontrakan($id)
	{
		$this->db->select('*');
		$this->db->from('detail_kontrakan');
		$this->db->join('kontrakan', 'kontrakan.kode_detail=detail_kontrakan.kode_detail');
		$this->db->where('id_pemilik',$id);
		return $this->db->get();
	}

	public function get_id_detail_kontrakan($id)
	{
		return $this->db->get_where('detail_kontrakan', ['id' => $id]);
	}

	public function get_id_kontrakan($id)
	{
		return $this->db->get_where('kontrakan', ['id_kontrakan' => $id]);
	}

	public function update_deskripsi($data,$where)
	{
		$this->db->where($where);
		$this->db->update('detail_kontrakan', $data);
	}

	public function update_kontrakan($data,$data2,$where,$id,$unit)
	{
		$query = $this->db->get_where('kontrakan', ['id_kontrakan' => $id])->row();
		$unit_lama = $query->unit;
		$kode = $query->kode_detail;

		if($unit == $unit_lama){
			$this->db->where($where);
			$this->db->update('kontrakan', $data);
		} else {
			$query2 = $this->db->get_where('detail_kontrakan', ['kode_detail' => $kode])->result();
			foreach($query2 as $qry2){
				$id_detail = $qry2->id;
				for($i=1; $i <= $unit_lama; $i++){
					$this->db->where('id', $id_detail);
					$del = $this->db->delete('detail_kontrakan');
				}
			}
			if($del == TRUE){
				$this->db->where($where);
				$this->db->update('kontrakan', $data);
				for($i=1; $i <= $unit; $i++){
					$this->db->insert('detail_kontrakan', $data2);
				}
			}
		}
	}

}

?>