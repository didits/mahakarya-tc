<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prestasi extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('prestasi_model');
    }
	public function index()
	{
		$data['h'] = $this->prestasi_model->show_prestasi();
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('link');
		$this->load->view('body_navbar');
		$this->load->view('prestasi', $data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
}
