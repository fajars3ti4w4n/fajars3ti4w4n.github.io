<?php
class rekomendasi_buku extends CI_Model {
        function tampil_data(){
            return $this->db->get('rekomendasi_buku');
        }
        function input_data($data,$table){
            $this->db->insert($table,$data);
    }
     function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }	
    }
