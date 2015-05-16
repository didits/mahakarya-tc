<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Final_project extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project');
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
	
	public function rincian_fp()
	{
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project _rinci');
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
}
