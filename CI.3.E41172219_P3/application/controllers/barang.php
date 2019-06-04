<?php

class barang extends CI_controller{

    function _construct(){
        parent::_construct();
        //load class m_brang
        $this->load->model("m_barang");
        //load class form_validation
        $this->load->library("form_validation");
    }
    function index(){
        $data['list']=$this->m_barang->getAll();
        $this->load->view('admin/barang/v_barang',$data);
    }
    
    function add(){
        $this->load->view('admin/barang/v_tambah');
        
    }
    function edit($id){
      
   }

}