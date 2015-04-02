<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tentang_kami extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('link');
		$this->load->view('body_navbar');
		$this->load->view('tentang_kami');
		$this->load->view('footer');
	}
}
