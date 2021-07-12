<?php

class Jenis_model extends CI_Model{

    public $id;
    public $nama;

    public function getAllData(){

        //select * from pasien
        // $this->db->get('nama_tabel');
       $query = $this->db->get('jenis_wisata');
       return $query;
    }

    public function findById($id){
        //select * from pasien where id = id;
        //$this->db->get_where('nama_tabel',array(id));
       $query = $this->db->get_where('jenis_wisata',['id'=>$id]);
       return $query->row();
    }
 
    public function update($data,$id){
       
        //$this->db->update('nama_tabel',data,array_id)

        $this->db->update('jenis_wisata',$data,array('id'=>$id));
    }

    public function save($data){
        //$this->db->insert('nama_tabel',data)
        $this->db->insert('jenis_wisata',$data);
    }

    public function delete($where,$table){
        // delete * from pasien where id = 1
        $this->db->where($where);
        $this->db->delete($table);
    }
   

   


}

?>