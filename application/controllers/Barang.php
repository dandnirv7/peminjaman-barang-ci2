<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_barang');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Barang/V_barang');
		$this->load->view('Footer');
	}
	public function tambah()
	{
		$this->load->view('Header');
		$this->load->view('Barang/T_barang');
		$this->load->view('Footer');
	}
	function tambah_aksi(){
    $data = array(
        'id_barang' => $this->input->post('id_barang'),
        'nama_barang' => $this->input->post('nama_barang'),
        'spesifikasi' => $this->input->post('spesifikasi'),
        'lokasi' => $this->input->post('lokasi'),
        'kondisi' => $this->input->post('kondisi'),
        'sumber_dana' => $this->input->post('sumber_dana'),
        'jumlah_barang' => $this->input->post('jumlah_barang'),
        // 'jml_masuk' => $this->input->post('jml_masuk'),  // <== ini yang kurang
    );
    $this->M_barang->input_data($data,'barang');
    redirect('Barang/index');
}

	function edit($id){
		$data['Barang'] = $this->M_barang->edit_data($id);
		$this->load->view('Header');
		$this->load->view('Barang/U_barang',$data);
		$this->load->view('Footer');
	} 
	function update(){
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$spesifikasi = $this->input->post('spesifikasi');
		$lokasi = $this->input->post('lokasi');
		$kondisi = $this->input->post('kondisi');
		$sumber_dana = $this->input->post('sumber_dana');
		$jumlah_barang = $this->input->post('jumlah_barang');
				
	$data = array(
			'nama_barang' => $nama_barang,
			'spesifikasi' => $spesifikasi,
			'lokasi' => $lokasi,
			'kondisi' => $kondisi,
			'sumber_dana' => $sumber_dana,
			'jumlah_barang' => $jumlah_barang
	); 
	$where = array(
		'id_barang' => $id_barang
	); 
	$this->M_barang->update_data($where,$data,'barang');
	redirect('Barang/index');
	}
	function hapus($id){
		$where = array('id_barang' => $id);
		$this->M_barang->hapus_data($where,'barang');
		redirect('Barang/index');
	} 
} 