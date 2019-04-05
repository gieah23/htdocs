<?php
    class m_barang extends CI_Model{
        private $_table = "barang";

        public $kdbarang;
        public $nama;
        public $deskripsi;
        public $stokbarang;
        public $hargabarang;

        public function rules(){
            return{
                ['field'=>'nama',
                'label'=>'Nama barang',
                'rules'=>'required'],

                ['field'=>'harga',
                'label'=>'Harga barang',
                'rules'=>'numeric'],
                
                ['field'=>'nama',
                'label'=>'Nama barang',
                'rules'=>'required'],
                
                ['field'=>'nama',
                'label'=>'Nama barang',
                'rules'=>'required'],
            }
        }

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