<?php

class Wisata_model extends CI_Model{

    public $id;
    public $nama;
    public $deskripsi;
    public $jenis_wisata_id;
    public $fasilitas;
    public $bintang;
    public $kontak;
    public $alamat;
    public $latlong;
    public $email;
    public $web;
    public $jenis_kuliner_id;
    



    public function getAll(){
        // menampilkan data wisata   
           
            $this->db->select('*');
            $this->db->from('wisata');	
            $query = $this->db->get();
            return $query;
        }
    
        public function jenis_kuliner(){
    
            //menampilkan data  kuliner
            //select * from jenis_kuliner
            $this->db->select('*');
            $this->db->from('wisata');
            $this->db->join('wisata.','wisata.jenis_kuliner_id =jenis_kuliner.id' );
           $query = $this->db->get();
            return $query;
         }
    
        
        public function jenis_wisata(){ 
            //menampilkan data  kuliner
            $this->db->select('*');
            $this->db->from('wisata');
            $this->db->join('jenis_kuliner','wisata.jenis_kuliner_id = jenis_kuliner.id');
                 $query = $this->db->get();
            return $query;
         }
    
         public function joinwisatakuliner(){
             //menampilkan join data wisata dan kuliner
            //select * from wisata join jenis_kuliner where wisata.jenis_kuliner_id = jenis_kuliner.id;
            $this->db->select('*');
            $this->db->from('wisata');
            $this->db->join('jenis_kuliner','wisata.jenis_kuliner_id = jenis_kuliner.id');
            $this->db->join('jenis_wisata','wisata.jenis_wisata_id = jenis_wisata.id');		
            $query = $this->db->get();
            return $query;
         }

         public function findById($id){
            //select * from profesi where id = $id
            
            //$this->db->get_where('nama_tabel',array id)
            return $this->db->get_where('wisata', ["id" => $id])->row();
        }
    
    
         
       
    public function delete($where,$table){

        //delete from wisata where id = id
        $this->db->where($where);
        $this->db->delete($table);
    }

    //add data

    public function save($data){
        //$this->db->insert('nama_tabel',data)
        $this->db->insert('wisata',$data);
    }



    //edit data
   
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('Wisata',$data,array('id'=>$id));
    }

    //fungsi upload foto    
    public function upload_foto(){
        
		$config['upload_path']         = 'img/';  // folder upload tujuan 
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
		$config['max_size']             = 3000; //maksimal ukuran file
		$config['max_width']            = 1024; //maksimal lebar gambar
		$config['max_height']           = 768;// maksimal tinggi gambar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) { //parameter foto diambil dari nama column database
            return $this->upload->data("file_name");
        }
        
        return "default.png";

    }

}




?>