<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('beranda/beranda');
		$this->load->view('beranda/prestasi_beranda');
		$this->load->view('footer');
	}
}
