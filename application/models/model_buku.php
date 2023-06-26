<?php

class Model_Buku extends CI_Model{
	public function tampil_data(){
		return $this->db->get('buku');
	}

	public function tambah_buku($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_buku($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('kode_buku', $id)
						   ->limit(1)
						   ->get('buku');
		if($result->num_rows() > 0){
			return $result->row();

		}else{
			return array();
		}
	}

	public function detail_buku($kode_buku){
		$result = $this->db->where('Kode_Buku', $kode_buku)->get('buku');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
}