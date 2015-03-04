<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('prestasi');
		$this->load->view('footer');
	}
}
