<?php 
class Vote extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('m_vote');
	}

	public function voting() {
		$data = [
			'nis' => $this->session->userdata('nis'),
			'kandidat' => $this->input->post('kandidat'),
			'status' => 1
		];

		$this->db->insert('vote', $data);
		redirect('vote/logout');
	}
	public function logout() {
		$this->session->unset_userdata('nis');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('terimakasih', 'Anda berhasil memilih.');
		redirect('auth');
	}
}
?>