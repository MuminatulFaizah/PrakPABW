<?php

class M_Mahasiswa extends CI_Model{
	function get() {
		$data = $this->db->get('mahasiswa');

		return $data->result();
	}

}

?>