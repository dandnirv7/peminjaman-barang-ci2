<?php 
class M_profil extends CI_Model{	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function edit_data($id){	
		$result = $this->db->query("SELECT*FROM user WHERE username='".$this->session->userdata('username')."'");
    return $result;
	} 
}