<?php 
class M_pinjam extends CI_Model{	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	} 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function edit_data($id){	
		$result = $this->db->query("SELECT*FROM pinjam_barang WHERE id_pinjam='".$id."'");
    return $result;
	} 
}  	