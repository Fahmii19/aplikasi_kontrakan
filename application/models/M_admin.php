<?php 

class M_admin extends CI_Model{


public function insert_data($data,$table){
	$this->db->insert($table,$data);
}








}

 ?>