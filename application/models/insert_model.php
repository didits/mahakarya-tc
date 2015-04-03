<?php

class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');

    }
    

public function inpres($tanggal_post,$id_prestasi,$nama_prestasi,$deskripsi,$tahun,$bidang,$tingkat,$peringkat,$dokumentasi)
{
    $this->db->query("insert into prestasi(tanggal_post,id_prestasi,nama_prestasi,deskripsi,tahun,bidang,tingkat,peringkat,dokumentasi)values(now(),'$id_prestasi','$nama_prestasi','$deskripsi','$tahun','$bidang','$tingkat','$peringkat','$dokumentasi')");
}
}
?>
