<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_buku_m extends CI_Model{

	function tampil_data(){
		return $this->db->get('buku');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('buku');
        
        return $this->db->affected_rows() > 0;
    }
	
}