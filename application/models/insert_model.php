<?php

class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
    
 function inpres($tanggal_post,$id_prestasi,$nama_prestasi,$deskripsi,$tahun,$bidang,$tingkat,$peringkat,$dokumentasi)
{
    return $this->db->query("insert into prestasi(tanggal_post,id_prestasi,nama_prestasi,deskripsi,tahun,bidang,tingkat,peringkat,dokumentasi)values(now(),'$id_prestasi','$nama_prestasi','$deskripsi','$tahun','$bidang','$tingkat','$peringkat','$dokumentasi')");
}

 function infp($judul,$nrp1,$nrp2,$nrp3,$nrp4,$nrp5,$nrp6,$deskripsi,$semester,$nip,$matkul,$screenshot,$video,$demo)
{
	return $this->db->query("CALL SP_INSERT_FP('$judul','$nrp1','$nrp2','$nrp3','$nrp4','$nrp5','$nrp6','$deskripsi','$semester','$nip','$matkul','$screenshot','$video','$demo')");
}
public function showfp()
{
	$query = $this->db->get('fp');
	return $query
}
public function add_fp()
	{
		$data=array(
			'judul'=>$this->input->post('judul'),
			'nrp1'=>$this->input->post('nrp1'),
			'nrp2'=>$this->input->post('nrp2'),
			'nrp3'=>$this->input->post('nrp3'),
			'nrp4'=>$this->input->post('nrp4'),
			'nrp5'=>$this->input->post('nrp5'),
			'nrp6'=>$this->input->post('nrp6'),
			'nip'=>$this->input->post('nip'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'semester'=>$this->input->post('semester'),
			'matkul'=>$this->input->post('matkul'),
			'screenshot'=>$this->input->post('screenshot'),
			'vidio'=>$this->input->post('video'),
			'nip'=>$this->input->post('demo'),
			);
		$this->db->insert('user',$data);
	}
}
?>
