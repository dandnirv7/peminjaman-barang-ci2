 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_pinjam');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Pinjam/V_pinjam');
		$this->load->view('Footer');
	}
	public function tambah()
	{
		$this->load->view('Header');
		$this->load->view('Pinjam/T_pinjam');
		$this->load->view('Footer');
	}
	function tambah_aksi(){
		
	$query = $this->db->query("SELECT*FROM barang WHERE id_barang='".$this->input->post('id_barang')."'");
	$barang = $query->row();
		$data = array(
		'id_pinjam' => $this->input->post('id_pinjam'),
		'peminjam' => $this->input->post('peminjam'),
		'tgl_pinjam' => $this->input->post('tgl_pinjam'),
		'id_barang' => $this->input->post('id_barang'),
		'nama_barang' => $barang->nama_barang,
		'jml_barang' => $this->input->post('jml_barang'),
		'tgl_kembali' => $this->input->post('tgl_kembali'),
		'kondisi' => $this->input->post('kondisi')
		);
		$this->M_pinjam->input_data($data,'pinjam_barang');
		
		$query2 = $this->db->query("CALL pinjam('".$this->input->post('id_barang')."','".$this->input->post('jml_barang')."')");
		
		redirect('Pinjam/index');
	}
	function edit($id){
		$data['Pinjam'] = $this->M_pinjam->edit_data($id);
		$this->load->view('Header');
		$this->load->view('Pinjam/U_pinjam',$data);
		$this->load->view('Footer');
	} 
	function update(){
		
		$id_pinjam = $this->input->post('id_pinjam');
		$peminjam = $this->input->post('peminjam');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jml_barang = $this->input->post('jml_barang');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$kondisi = $this->input->post('kondisi');
				
	$data = array(
			'tgl_kembali' => $tgl_kembali,
			'kondisi' => $kondisi
	); 
	$where = array(
		'id_pinjam' => $id_pinjam
	); 
	$this->M_pinjam->update_data($where,$data,'pinjam_barang');
	
	$query2 = $this->db->query("CALL kembali('".$this->input->post('id_barang')."','".$this->input->post('jml_barang')."')");
		
	redirect('Pinjam/index');
	}
	function hapus($id){
		$where = array('id_pinjam' => $id);
		$this->M_pinjam->hapus_data($where,'pinjam_barang');
		redirect('Pinjam/index');
	} 
} 	 