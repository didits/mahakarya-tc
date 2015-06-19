<?php

class prestasi_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
	
	public function show_prestasi()
	{
		$this->db->order_by("tahun","desc");
		$query = $this->db->get('prestasi');
		return $query;
	}
}
?>
