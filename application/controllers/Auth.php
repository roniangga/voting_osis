<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library('form_validation');
	}

	public function index() {
		$data['judul'] = 'Login Siswa';
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();

		if($this->session->userdata('nis') == false ){
			$this->form_validation->set_rules('nis1','Nis','trim|required|matches[nis2]',['required' => 'Nis harus di isi!','matches' => 'NIS tidak sama']);
			$this->form_validation->set_rules('nis2','Nis','trim|required|matches[nis1]',['required' => 'Nis harus di isi!']);
			if($this->form_validation->run()== false){
			$this->load->view('auth/login', $data);
			}else{
				$this->_login();
			}
		}else{	
			if($this->session->userdata('role_id') == 1){
				redirect('user');
			}elseif($this->session->userdata('role_id') == 2){

				redirect('admin');
			}
		}

		}

	private function _login() {
		$nis = $this->input->post('nis1');

		$user = $this->db->get_where('user', ['nis' => $nis])->row_array();
		$vote = $this->db->get_where('vote', ['nis' => $nis])->row_array();

		// jika user ada
		if($user){
			// jika user sudah memilih
			if($vote){
				$this->session->set_flashdata('message', 'Anda tidak bisa login karena sudah memilih!.');
				redirect('auth');
			}else{
				$data = [
					'nis' => $user['nis'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if($user['role_id'] == 1){

				redirect('user');
				}else{

				redirect('admin');
				}

			}

		}else{
			$this->session->set_flashdata('message', 'NIS tidak terdaftar!.');
			redirect('auth');
		}
	}

	public function logout() {

		$vote = $this->db->get_where('vote', ['nis' => $this->session->userdata('nis')])->row_array();
		if($this->session->userdata('role_id')==1){
			if($vote == true){
			$this->session->unset_userdata('nis');
			$this->session->unset_userdata('role_id');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Anda telah Logout.
			</div>');
			redirect('auth');
			}else{
				$this->session->set_flashdata('tidakbisa', 'Anda harus memilih terlebih dahulu!.');
			redirect('user');
			}
		}else{
			$this->session->unset_userdata('nis');
			$this->session->unset_userdata('role_id');

			$this->session->set_flashdata('terimakasih', 'Anda telah Logout.');
			redirect('auth');
		}
	}


}
?>