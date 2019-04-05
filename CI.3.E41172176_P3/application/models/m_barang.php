<?php
    class m_barang extends CI_Model{
        function daftar_barang(){
            return $this->db->get("barang")->result();
        }
        public function save(){
            $post = $this->input->post();
            $this->kdbarang = uniqid();
            $this->nama = $post['nama'];
            $this->deskripsi = $post['deskripsi'];
            $this->stokbarang = $post['stokbarang'];
            $this->hargabarang = $post['hargabarang'];
            $this->db->insert($this->_table, $this);
        } 
    }
 ?>