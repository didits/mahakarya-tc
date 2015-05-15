<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Final_project extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('include_tab');
		$this->load->view('link');
		$this->load->view('body_navbar');
		$this->load->view('final_project');
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
}
