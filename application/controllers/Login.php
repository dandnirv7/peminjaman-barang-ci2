<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{ 
	function __construct(){
		parent::__construct();	
		$this->load->helper('url');	
		$this->load->model('m_login'); 
	}
	function index(){
		$this->load->view('v_login');
	}
	function aksi_login(){       
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        $cek_dosen=$this->m_login->cek_login($username,$password);
		if($cek_dosen->num_rows() > 0){
		$data=$cek_dosen->row_array();
        $this->session->set_userdata('masuk',TRUE);
        $this->session->set_userdata('akses','1');
        $this->session->set_userdata('username',$data['username']);
        redirect('home');
		}else{
        redirect('login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}