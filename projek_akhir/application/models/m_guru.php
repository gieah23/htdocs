<?php
    class m_guru extends CI_Model{
        private $_table = "guru";

        public $nip;
        public $nama_guru;
        public $alamat;
        public $email;
        public $no_hp;
        public $jk;
        public $kode_mapel;
        public $kelas;

        public function rules(){
            return{
                ['field'=>'nip',
                'label'=>'NIP',
                'rules'=>'numeric'],

                ['field'=>'nama_guru',
                'label'=>'Nama Guru',
                'rules'=>'required'],

                ['field'=>'alamat',
                'label'=>'Alamat',
                'rules'=>'required'],

                ['field'=>'email',
                'label'=>'Email',
                'rules'=>'required'],

                ['field'=>'no_hp',
                'label'=>'Nomor HP',
                'rules'=>'numeric'],

                ['field'=>'jk',
                'label'=>'Jenis Kelamin',
                'rules'=>'required'],

                ['field'=>'kode_mapel',
                'label'=>'Kode Mapel',
                'rules'=>'numeric'],

                ['field'=>'kelas',
                'label'=>'Kelas',
                'rules'=>'numeric'],
            }
        }

        function daftar_guru(){
            return $this->db->get("guru")->result();
        }
        public function save(){
            $post = $this->input->post();
            $this->nip = uniqid();
            $this->nama_guru = $post['nama_guru'];
            $this->alamat = $post['alamat'];
            $this->email = $post['email'];
            $this->no_hp = $post['no_hp'];
            $this->jk = $post['jk'];
            $this->kode_mapel = $post['kode_mapel'];
            $this->kelas = $post['kelas'];
            $this->db->insert($this->_table, $this);
        } 
    }
 ?>