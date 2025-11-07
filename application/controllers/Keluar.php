 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_keluar');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Keluar/V_keluar');
		$this->load->view('Footer');
	}
	public function tambah()
	{
		$this->load->view('Header');
		$this->load->view('Keluar/T_keluar');
		$this->load->view('Footer');
	}
	function tambah_aksi(){
		$query = $this->db->query("SELECT*FROM barang WHERE id_barang='".$this->input->post('id_barang')."'");
		$barang = $query->row();
		$data = array(		
		'id_barang' => $this->input->post('id_barang'),
		'nama_barang' => $barang->nama_barang,
		'tgl_keluar' => $this->input->post('tgl_keluar'),
		'jml_keluar' => $this->input->post('jml_keluar'),
		'id_supplier' => $this->input->post('id_supplier')
		);
		$this->M_keluar->input_data($data,'barang_keluar');
		$query2 = $this->db->query("CALL tambah_keluar('".$this->input->post('id_barang')."','".$this->input->post('jml_keluar')."')");
		redirect('Keluar/index');
	}
	function hapus($id){
		$query = $this->db->query("SELECT*FROM barang_keluar WHERE id_barang='".$id."'");
		$barang = $query->row();
		$query2 = $this->db->query("CALL batal_keluar('".$id."','".$barang->jml_keluar."')");
		$where = array('id_barang' => $id);
		$this->M_keluar->hapus_data($where,'barang_keluar');
		redirect('Keluar/index');
	} 
} 	 