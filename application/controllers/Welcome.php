<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('link');
		$this->load->view('body_navbar');
		$this->load->view('beranda');
		$this->load->view('footer');
	}
}
