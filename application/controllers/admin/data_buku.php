<?php

class Data_buku extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda belum Login !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}
	
	public function index(){
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$kode_buku = $this->input->post('kode_buku');
		$kode_kategori = $this->input->post('kode_kategori');
		$judul_buku = $this->input->post('judul_buku');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$harga = $this->input->post('harga');
		$gambar = $_FILES['gambar']['name'];
		if($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal di Upload";
			}else{
			    	$gambar=$this->upload->data('file_name');
			}
	    }

		$stok = $this->input->post('stok');
		$sinopsis = $this->input->post('sinopsis');

		$data = array (
			'kode_buku'     => $kode_buku,
			'kode_kategori' => $kode_kategori,
			'judul_buku'    => $judul_buku,
			'pengarang'    	=> $pengarang,
			'penerbit'    	=> $penerbit,
			'harga'    		=> $harga,
			'gambar'    	=> $gambar,
			'stok'    		=> $stok,
			'sinopsis'    	=> $sinopsis,
		);

		$this->model_buku->tambah_buku($data, 'buku');
		redirect('admin/data_buku/index');

	}

	public function edit($id){
		$where = array('kode_buku' => $id);
		$data['buku'] = $this->model_buku->edit_buku($where, 'buku')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_buku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id = $this->input->post('kode_buku');
		$kode_kategori = $this->input->post('kode_kategori');
		$judul_buku = $this->input->post('judul_buku');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$sinopsis = $this->input->post('sinopsis');

		$data = array (

			'kode_kategori' => $kode_kategori,
			'judul_buku'    => $judul_buku,
			'pengarang'    	=> $pengarang,
			'penerbit'    	=> $penerbit,
			'harga'    		=> $harga,
			'stok'    		=> $stok,
			'sinopsis'    	=> $sinopsis,
		);

		$where = array (
			'kode_buku' => $id
		);

		$this->model_buku->update_data($where, $data, 'buku');
		redirect('admin/data_buku/index');
	}

	public function hapus ($id){
		$where = array('kode_buku' => $id);
		$this->model_buku->hapus_data($where, 'buku');
		redirect('admin/data_buku/index');
	}
}
?>