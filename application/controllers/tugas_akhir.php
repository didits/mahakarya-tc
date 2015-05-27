<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tugas_akhir extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('tugas_akhir_model');
    }
	public function index()
	{
		$data['h'] = $this->tugas_akhir_model->show_rmk();
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('tugas_akhir', $data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
	/*
	public function index()
	{
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('tugas_akhir');
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}*/
}
