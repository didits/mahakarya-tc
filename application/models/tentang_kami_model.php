<?php
class tentang_kami_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database('default','true');
    }
	
	public function show_tentang_kami()
	{
		$query = $this->db->get('tentang_kami');
		return $query;
	}
}
?>
