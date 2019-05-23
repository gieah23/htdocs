<?php
    class Tables extends CI_Controller{
        function index(){
            $this->load->model("m_tables");
            $data['nama']=$this->m_tables->daftar_barang();
            $this->load->view('admin/tables', $data);
        }
    }
?>