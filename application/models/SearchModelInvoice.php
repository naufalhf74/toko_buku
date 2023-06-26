<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModelInvoice extends CI_Model {

	public function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('invoice');
		if(!empty($keyword)){
			$this->db->like('id',$keyword);
			$this->db->or_like('nama',$keyword);
			$this->db->or_like('alamat',$keyword);
		}
		return $this->db->get()->result_array();
	}

}