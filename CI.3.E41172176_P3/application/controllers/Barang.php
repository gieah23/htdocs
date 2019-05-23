<?php
    class Barang extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model("m_barang");
            $this->load->library("form_validation");
        }
        
        function index(){
            $this->load->model("m_barang");
            $data['judul']="Ini Adalah Judul Gayn";
            $data['nama']=$this->m_barang->daftar_barang();
            $this->load->view('v_barang', $data);
        }

        function add(){
            $barang=$this->m_barang;
            $barang->save();
            $this->load->view('admin/v_tambah.php');
        }
    }