<?php

class barang extends CI_controller{

    function index(){
        $this->load->model('m_barang');
        $judul="barang";
        $data['judul']=$judul;
        $data['barang']=$this->m_barang->list_barang();
        $this->load->view('v_barang',$data);
    }
    
    function edit(){
         echo "edit";
    }

}