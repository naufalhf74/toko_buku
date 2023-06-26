<?php

class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda belum Login !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}

	public function tambah_ke_keranjang($id){

		$buku = $this->model_buku->find($id);

		$data = array(
	        'id'      => $buku->Kode_Buku,
	        'qty'     => 1,
	        'price'   => $buku->Harga,
	        'name'    => $buku->Judul_Buku
		);

		$this->cart->insert($data);
		redirect('Welcome');
	}

	public function detail_keranjang(){

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('Welcome');
	}

	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan(){
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		}else{
			echo "Maaf, Pesanan Anda Gagal di Proses";
		}
		
	}

	public function detail($kode_buku){

		$data['buku'] = $this->model_buku->detail_buku($kode_buku);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_buku', $data);
		$this->load->view('templates/footer');
	}
	
}
?>