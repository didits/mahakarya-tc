<?php

class ta_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
	
	public function show_rmk()
	{
		$query = $this->db->get('rmk');
		return $query;
	}
	
	public function show_tahun()
	{
		$query = $this->db->get('tahun_pelajaran');
		return $query;
	}
	
	public function rmk($id)
	{
		$this->db->where("rmk",$id);
		$query = $this->db->get('ta');
		return $query;
	}
	
	public function rmk_rinci($id)
	{
		$this->db->where("ID_TA",$id);
		$query = $this->db->get('ta');
		return $query;
	}
}
?>
