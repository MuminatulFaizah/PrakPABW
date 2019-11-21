<?php
class C_Mahasiswa extends CI_Controller{
	public function index() {
		$this->load->model('m_mahasiswa');

		$get = $this->m_mahasiswa->get();
		// print_r($get)
		$data['nim'] = $get[0]->nim;
		$data['nama'] = $get[0]->nama;
		$data['ttl'] = $get[0]->ttl;
		$data['alamat'] = $get[0]->alamat;

		$this->load->view('v_mahasiswa', $data);
	}
}

?>