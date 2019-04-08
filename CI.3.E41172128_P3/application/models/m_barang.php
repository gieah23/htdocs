<?php

class m_barang extends CI_Model{
    //membuat fungsi untuk mengambil data
    private $_table="barang";

    public function list_barang(){
        return $this->db->get($this->_table)->result();

    }
    public function save(){
        //mysqli_query(insert into barang (Kodebarang,namabarang)values);
        $post = $this ->input->post();
        $this->Kode_brg =uniqid();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stok_barang = $post["stok_barang"];
        $this->harga_brg = $post["harga_brg"];
        $this->db->insert($this->_table, $this);
    }
}

?>