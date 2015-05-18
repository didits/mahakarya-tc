<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
       }
	   
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	
		public function final_project_tambah()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject');
		$this->load->view('admin/footer');
	}
		public function final_project_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject_edit');
		$this->load->view('admin/footer');
	}
		public function final_project_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject_hapus');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir_edit');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir_hapus');
		$this->load->view('admin/footer');
	}
	public function karya()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya');
		$this->load->view('admin/footer');
	}
	public function karya_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya_edit');
		$this->load->view('admin/footer');
	}
	public function karya_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya_hapus');
		$this->load->view('admin/footer');
	}
	
		public function submit_fp()
		{
			$judul=$this->input->post('judul');
			$nrp1=$this->input->post('nrp1');
			$nrp2=$this->input->post('nrp2');
			$nrp3=$this->input->post('nrp3');
			$nrp4=$this->input->post('nrp4');
			$nrp5=$this->input->post('nrp5');
			$nrp6=$this->input->post('nrp6');
			$deskripsi=$this->input->post('deskripsi');
			$semester=$this->input->post('semester');
			$nip=$this->input->post('nip');
			$matkul=$this->input->post('matkul');
			$screenshot=$this->input->post('screenshot');
			$video=$this->input->post('video');
			$demo=$this->input->post('demo');
				
				$this->insert_model->infp($judul,$nrp1,$nrp2,$nrp3,$nrp4,$nrp5,$nrp6,$deskripsi,$semester,$nip,$matkul,$screenshot,$video,$demo);
		
			$this->load->view('admin/header');
			$this->load->view('admin/finalproject');
			$this->load->view('admin/footer');
		}
}
