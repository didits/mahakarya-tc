<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Final_project extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('fp_model');
    }
	public function index()
	{
		$data['h'] = $this->fp_model->show_matakuliah();
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project', $data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
	
	public function list_matakuliah()
	{
		$data['h'] = $this->fp_model->show_matakuliah();
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project', $data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
	
	public function matakuliah($id)
	{
		$data['h'] = $this->fp_model->matakuliah($id);
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project_matakuliah',$data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
	
	public function rincian_fp($id)
	{
		$data['h'] = $this->fp_model->matakuliah_rinci($id);
		$this->load->view('header');
		$this->load->view('beranda/link_beranda');
		$this->load->view('body_navbar');
		$this->load->view('final_project _rinci', $data);
		$this->load->view('end_of_tab');
		$this->load->view('footer');
	}
}
