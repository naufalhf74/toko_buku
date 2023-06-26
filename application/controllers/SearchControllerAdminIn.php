<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchControllerAdminIn extends CI_Controller {

	public function index()
	{
		$this->load->model('SearchModelInvoice');
		$keyword = $this->input->get('keyword');
		$data = $this->SearchModelInvoice->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
		$this->load->view('templates_admin/Sidebarinvoice');
		$this->load->view('templates_admin/SearchAdminIn',$data);
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
}