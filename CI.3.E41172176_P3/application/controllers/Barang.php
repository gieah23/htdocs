<?php
    class Barang extends CI_Controller{
        function index(){
            $this->load->model("m_barang");
            $data['judul']="Ini Adalah Judul Gayn";
            $data['nama']=$this->m_barang->daftar_barang();
            $this->load->view('v_barang', $data);
        }

        function edit(){
            echo "edit";
        }
    }