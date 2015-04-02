<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasiadmin extends CI_Controller {
	public function index()
	{
		$this->load->view('headeradmin');
		$this->load->view('link');
		$this->load->view('body_navbaradmin');
		$this->load->view('prestasiadmin');
		$this->load->view('footeradmin');
	}
}
