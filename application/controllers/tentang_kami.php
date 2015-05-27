<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tentang_kami extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('tentang_kami_model');
    }
	public function index()
	{
		$data['h'] = $this->tentang_kami_model->show_tentang_kami();
		$this->load->view('header');
		$this->load->view('link');
		$this->load->view('body_navbar');
		$this->load->view('tentang_kami', $data);
		$this->load->view('footer');
	}
}
