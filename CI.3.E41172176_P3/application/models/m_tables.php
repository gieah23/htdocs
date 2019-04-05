<?php
    class m_tables extends CI_Model{
        function daftar_barang(){
            return $this->db->get("barang")->result();
        }
    }
 ?>