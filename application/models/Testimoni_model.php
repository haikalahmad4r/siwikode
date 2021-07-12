<?php

class Testimoni_model extends CI_Model{

    public $id;
    public $nama;
    public $email;
    public $wisata_id;
    public $profesi_id;
    public $rating;
    public $komentar;
   


    public function terstimoniData(){
        // menampilkan data wisata   
           
            $this->db->select('*');
            $this->db->from('testimoni');	
            $query = $this->db->get();
            return $query;
        }
    
        public function wisata(){
    
            //menampilkan data  kuliner
            //select * from jenis_kuliner
            $this->db->select('*');
            $this->db->from('wisata');
                 $query = $this->db->get();
            return $query;
         }
    
         /*
        public function jenis_wisata(){
            //menampilkan data  kuliner
            $this->db->select('*');
            $this->db->from('jenis_wisata');
                 $query = $this->db->get();
            return $query;
         }*/
    
         public function jointestimoniwisata(){
             //menampilkan join data wisata dan kuliner
            //select * from wisata join jenis_kuliner where wisata.jenis_kuliner_id = jenis_kuliner.id;
            $this->db->select('*');
            $this->db->from('testimoni');
            $this->db->join('wisata','testimoni.wisata_id = wisata.id');
            $this->db->join('profesi','testimoni.profesi_id =profesi.id');

            
		
            $query = $this->db->get();
            return $query;
         }

    public function delete($where,$table){

        //delete from Testimoni where id = id
        $this->db->where($where);
        $this->db->delete($table);
    }

    //add data

    public function save($data){
        //$this->db->insert('nama_tabel',data)
        $this->db->insert('testimoni',$data);
    }



    //edit data
   
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('Testimoni',$data,array('id'=>$id));
    }

    //fungsi upload foto    
    public function upload_foto(){
        //fungsi buat upload foto
		$config['upload_path']         = 'backend/img';  // folder upload tujuan 
		$config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
		$config['max_size']             = 10000; //maksimal ukuran file
		$config['max_width']            = 1024; //maksimal lebar gambar
		$config['max_height']           = 768;// maksimal tinggi gambar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) { //parameter foto diambil dari nama column database
            return $this->upload->data("file_name");
        }
        
        return "backend/img/default.png";
    }

}




?>