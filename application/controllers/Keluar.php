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

    public function tambah_aksi()
    {
        $barang_id = $this->input->post('id_barang');
        $query = $this->db->query("SELECT * FROM barang WHERE id_barang = '$barang_id'");
        $barang = $query->row();

        if ($barang) {
            $data = array(
                'id_barang'    => $barang_id,
                'nama_barang'  => $barang->nama_barang,
                'tgl_keluar'   => $this->input->post('tgl_keluar'),
                'jml_keluar'   => $this->input->post('jml_keluar'),
                'id_supplier'  => $this->input->post('id_supplier')
            );

            $this->M_keluar->input_data($data, 'barang_keluar');

            $this->db->simple_query("CALL tambah_keluar('$barang_id', '{$this->input->post('jml_keluar')}')");

            redirect('Keluar/index');
        } else {
            echo "Barang not found.";
        }
    }

    public function hapus($id)
    {
        $query = $this->db->query("SELECT * FROM barang_keluar WHERE id_barang = '$id'");
        $barang = $query->row();

        if ($barang) {
            $this->db->simple_query("CALL batal_keluar('$id', '{$barang->jml_keluar}')");

            $where = array('id_barang' => $id);
            $this->M_keluar->hapus_data($where, 'barang_keluar');

            redirect('Keluar/index');
        } else {
            echo "Barang Keluar record not found.";
        }
    }
}