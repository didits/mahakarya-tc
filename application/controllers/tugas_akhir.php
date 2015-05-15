<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tugas_akhir extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('tugas_akhir');
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
}
