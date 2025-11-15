<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends CI_Model {

    function input_data($data, $table) {
        return $this->db->insert($table, $data);
    }

    function edit_data($id) {
        return $this->db->get_where('pinjam_barang', ['id_pinjam' => $id])->row();
    }

    function update_data($where, $data, $table) {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    // ============================================
    // FINAL FIX — MENGGUNAKAN MYSQLI LANGSUNG
    // ============================================
    function call_procedure($query) {

        $conn = $this->db->conn_id; // ambil koneksi mysqli mentah

        $result = mysqli_query($conn, $query);

        // buang semua resultset SP agar tidak error
        while (mysqli_more_results($conn)) {
            mysqli_next_result($conn);
            mysqli_use_result($conn);
        }

        return $result;
    }
}