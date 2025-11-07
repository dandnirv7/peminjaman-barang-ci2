<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_masuk');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Masuk/V_masuk');
		$this->load->view('Footer');
	}
	public function tambah()
	{
		$this->load->view('Header');
		$this->load->view('Masuk/T_masuk');
		$this->load->view('Footer');
	}
	function tambah_aksi(){
		$query = $this->db->query("SELECT*FROM barang WHERE id_barang='".$this->input->post('id_barang')."'");
		$barang = $query->row();
		$data = array(		
		'id_barang' => $this->input->post('id_barang'),
		'nama_barang' => $barang->nama_barang,
		'tgl_masuk' => $this->input->post('tgl_masuk'),
		'jml_masuk' => $this->input->post('jml_masuk'),
		'id_supplier' => $this->input->post('id_supplier')
		);
		$this->M_masuk->input_data($data,'barang_masuk');
		$query2 = $this->db->query("CALL tambah_masuk('".$this->input->post('id_barang')."','".$this->input->post('jml_masuk')."')");
		redirect('Masuk/index');
	}
	function hapus($id){
		$query = $this->db->query("SELECT*FROM barang_masuk WHERE id_barang='".$id."'");
		$barang = $query->row();
		$query2 = $this->db->query("CALL batal_masuk('".$id."','".$barang->jml_masuk."')");
		$where = array('id_barang' => $id);
		$this->M_masuk->hapus_data($where,'barang_masuk');
		redirect('Masuk/index');
	} 
} 	 