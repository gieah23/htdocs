<?php
    class m_barang extends CI_Model{
        function daftar_barang(){
            return $this->db->get("barang")->result();
        }
    }
 ?>