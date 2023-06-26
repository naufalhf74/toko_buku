<?php

	class Kategori extends CI_Controller{
		
		public function flashsale(){
			$data['buku_anak'] = $this->model_kategori->data_buku_anak()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('flashsale', $data);
			$this->load->view('templates/footer');
			
		}


		public function novel(){
			$data['novel'] = $this->model_kategori->data_novel()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('novel', $data);
			$this->load->view('templates/footer');
			
		}

		public function komik(){
			$data['komik'] = $this->model_kategori->data_komik()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('komik', $data);
			$this->load->view('templates/footer');
			
		}

		public function ensiklopedia(){
			$data['ensiklopedia'] = $this->model_kategori->data_ensiklopedia()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ensiklopedia', $data);
			$this->load->view('templates/footer');
			
		}

		public function buku_pelajaran(){
			$data['buku_pelajaran'] = $this->model_kategori->data_buku_pelajaran()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('buku_pelajaran', $data);
			$this->load->view('templates/footer');
			
		}

		public function buku_agama(){
			$data['buku_agama'] = $this->model_kategori->data_buku_agama()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('buku_agama', $data);
			$this->load->view('templates/footer');
			
		}

		public function buku_anak(){
			$data['buku_anak'] = $this->model_kategori->data_buku_anak()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('buku_anak', $data);
			$this->load->view('templates/footer');
			
		}
	}
?>