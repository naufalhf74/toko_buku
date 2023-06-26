<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchControllerAdmin extends CI_Controller {

	public function index()
	{
		$this->load->model('SearchModel');
		$keyword = $this->input->get('keyword');
		$data = $this->SearchModel->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_admin/Sidebar');
		$this->load->view('templates_admin/SearchAdmin',$data);
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	
	}
}