<?php 
class M_login extends CI_Model{	
	function cek_login($username,$password){		       
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password=('$password')");
        return $query;
	}	
}