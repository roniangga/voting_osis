<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if($this->session->userdata('role_id')!=1){
			redirect('auth');
		}
		$this->load->model('M_vote');
	}


	public function index() {
		$data['kandidat'] = $this->M_vote->tampil_kandidat();
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Pemilihan ketua osis';

		$this->load->view('user/index', $data);
	}

	public function latihan() {
		$data['judul'] = 'latihan';

		$this->load->view('user/profile', $data);
	}

	public function latihan_aksi() {
		$data = [
			'email' => $this->input->post('email', true),
		];

		$this->db->insert('latihan', $data);
	}

		

}
?>


