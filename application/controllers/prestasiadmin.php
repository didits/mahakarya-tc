<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasiadmin extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
       }
    
    
    public function index()
	{

		$this->load->view('headeradmin');
		$this->load->view('link');
		$this->load->view('body_navbaradmin');
		$this->load->view('prestasiadmin');
		$this->load->view('footeradmin');
	}
    
public function do_register()
{
    if(!empty($_POST['idp']))
        {

            $tanggal_post= $this->input->post('tgl');
            $id_prestasi=$this->input->post('idp');
            $nama_prestasi= $this->input->post('nama');
            $deskripsi= $this->input->post('deskripsi');
            $tahun= $this->input->post('tahun');
            $bidang= $this->input->post('bidang');
            $tingkat= $this->input->post('tingkat');
            $peringkat= $this->input->post('peringkat');
            $dokumentasi= $this->input->post('dokumentasi');
    
            $this->insert_model->inpres($tanggal_post,$id_prestasi,$nama_prestasi,$deskripsi,$tahun,$bidang,$tingkat,$peringkat,$dokumentasi);

		$this->load->view('headeradmin');
		$this->load->view('link');
		$this->load->view('body_navbaradmin');
		$this->load->view('successinput');
		$this->load->view('footeradmin');           
            
        }
    
        redirect(base_url()."index.php"); 


	
    }
}
