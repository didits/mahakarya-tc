<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {
	
	public function index()
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM `blog` WHERE 1");
		$value = $query->row();
		$judul_blog['judul_blog']=$value->judul_blog;
		$this->load->view('header');
		$this->load->view('blog',$judul_blog);
		$this->load->view('footer');
	}
}
