<?php

class m_barang extends CI_Model{
    //membuat fungsi untuk mengambil data
    private $_table="barang";

    public function list_barang(){
        return $this->db->get($this->_table)->result();

    }
}

?>