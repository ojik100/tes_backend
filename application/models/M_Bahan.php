<?php 
 
class M_Bahan extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('bahan_makanan');
		$this->db->join('kategori_makanan','kategori_makanan.id = bahan_makanan.id_kategori','LEFT');      
		$query = $this->db->get();
		return $query;
	
		}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}