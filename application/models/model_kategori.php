<?php
	
	class Model_kategori extends CI_Model{
		public function data_novel(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG001'));
		}

		public function data_komik(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG002'));
		}

		public function data_ensiklopedia(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG003'));
		}

		public function data_buku_pelajaran(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG004'));
		}

		public function data_buku_agama(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG005'));
		}

		public function data_buku_anak(){
			return $this->db->get_where('buku', array('Kode_Kategori' => 'KG006'));
		}
	}
?>