<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Pemilihan ketua osis';

		$this->load->view('user/index', $data);
	}


}
?>