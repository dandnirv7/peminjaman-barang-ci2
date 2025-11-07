<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);	 
class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('M_profil');
	}
	public function index()
	{
		$id = $this->session->userdata('id_user'); // or use $this->input->get('id') if passed via GET
		$data['Profil'] = $this->M_profil->edit_data($id);
		$this->load->view('Header');
		$this->load->view('V_profil',$data);
		$this->load->view('Footer');
	} 
	function update(){
		$config['upload_path'] = 'foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;
	  
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('gambar')){ 
		$id_user = $this->input->post('id');
		$username = $this->input->post('akun');
		$nama = $this->input->post('nama');
		$password = $this->input->post('sandi');	
		
		$data = array(
				'username' => $username,
				'nama' => $nama,
				'password' => $password,
				'gambar' => $this->upload->file_name
		); 
		$where = array(
			'id_user' => $id_user
		); 
		$this->M_profil->update_data($where,$data,'`user`');
		}
		redirect('Profil/index');
		}
}