<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {

		parent:: __construct();
		if($this->session->userdata('role_id')!=2){
			redirect('auth');
		}
		$this->load->model('m_user');
		$this->load->model('M_vote');
		$this->load->library('form_validation');

	}

	public function index() {
	

		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['hasil'] = $this->M_vote->hasil();
		$data['hasil1'] = $this->M_vote->hasil1();
		$data['hasil2'] = $this->M_vote->hasil2();
		$data['hasil3'] = $this->M_vote->hasil3();
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/index/index');
		$this->load->view('admin/index/footer');
	}

	

	public function kandidat() {

		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['hasil'] = $this->M_vote->hasil();
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/kandidat/data_kandidat');
		$this->load->view('admin/index/footer');
	}

	public function suara() {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['suara'] = $this->M_vote->getAllsuara();
		// print_r($data['suara'] );
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/suara/data_suara');
		$this->load->view('admin/index/footer');

	}

	public function hapus_suara(){
		$this->db->delete('suara');
		$this->db->set_flashdata('flash', 'Di hapus');
		redirect('admin/suara');
	}

	public function print() {
		$data['siswa'] = $this->m_user->getAlluser();
		$this->load->view('admin/index/print', $data);
	}

	public function pdf_user() {
		$data['judul'] = 'User';
		$data['siswa'] = $this->m_user->getAlluser();
		$this->load->view('admin/user/pdf_user', $data);
	}

	public function user() {

		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['siswa'] = $this->m_user->getAlluser();
		// $data['vote']  = $this->m_user->status_vote();

		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/user/data_user');
		$this->load->view('admin/index/footer');
	}

	public function user_tambah() {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'panel admin';
		$data['kelas'] = ["10", "11", "12"];
		$data['jurusan'] = ["AK","AP","TKJ","PM","RPL"];
		$data['kelas2'] = ['1',"2","3","4"];
		$this->load->view('admin/index/header',$data);
		$this->load->view('admin/user/tambah_user');
		$this->load->view('admin/index/footer');
	}

	public function hapus_user($id) {
		$this->db->delete('user', ['id' => $id]);
		 $this->session->set_flashdata('flash', 'dihapus');
		redirect('admin/user');
	}

	public function reset_suara() {
		$this->db->empty_table('vote');
		redirect('admin/suara');
	}

	public function tambah_aksi() {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['kelas'] = ["10", "11", "12"];
		$data['jurusan'] = ["AK","AP","TKJ","PM","RPL"];
		$data['kelas2'] = ['1',"2","3","4"];

		$this->form_validation->set_rules('nis', 'NIS', 'required|trim|is_unique[user.nis]', ['is_unique'=> 'Nis sudah terdaftar!', 'required'=>'Nis harus di isi!!']);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required'=>'Nama harus di isi!!']);
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim', ['required'=>'Tanggal lahir harus di isi!!']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', ['required'=>'kelas harus di isi!!']);

		if($this->form_validation->run() == false){
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/user/tambah_user');
		$this->load->view('admin/index/footer');
		}else{
			$data = [
				'nis' => htmlspecialchars($this->input->post('nis',true)),
				'nama' => htmlspecialchars($this->input->post('nama',true)),
				'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
				'kelas' => $this->input->post('kelas').$this->input->post('jurusan').$this->input->post('kelas2'),
				'role_id' => 1,
				'data_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('flash','Berhasil di tambahkan');
			redirect('admin/user');
		}
	}

	public function tambah_kandidat() {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Input Kandidat';
		$data['nomor'] = ["1","2","3","4"];

		$this->form_validation->set_rules('nickname','Nickname','required|trim',['required'=> 'Nickname harus di isi!']);
		$this->form_validation->set_rules('no_urut','Nomor Urut','required|trim|is_unique[kandidat.no_urut]',['required'=> 'Nomor urut harus di isi!','is_unique'=> 'Nomor urut sudah ada']);
		// $this->form_validation->set_rules('gambar','Gambar','required|trim',['required'=> 'Gambar harus di isi!']);
		$this->form_validation->set_rules('nama_ketua','Nama Ketua','required|trim|min_length[4]',['required'=> 'Nama ketua harus di isi!','min_length'=> 'Nama terlalu pendek']);
		$this->form_validation->set_rules('nama_wakil','Nama wakil','required|trim|min_length[4]',['required'=> 'Nama wakil harus di isi!','min_length'=> 'Nama terlalu pendek']);
		$this->form_validation->set_rules('visi','Visi','required|trim|min_length[10]',['required'=> 'Visi harus di isi!']);
		$this->form_validation->set_rules('misi','Misi','required|trim|min_length[10]',['required'=> 'Misi harus di isi!']);

		if($this->form_validation->run() == false){
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/kandidat/input_kandidat');
		$this->load->view('admin/index/footer');
		}else{
			 $config['upload_path']          = './asset/upload';
             $config['allowed_types']        = 'gif|jpg|png';
             $config['max_size']             = 1024000990;
             $this->load->library('upload',$config);
             $this->upload->initialize($config);
             if(!$this->upload->do_upload('gambar')){
             	$error = array('error' => $this->upload->display_errors());
             	print_r($error);
             }else{
             	$gambar = $this->upload->data();

             	$data = [
             		'nickname_kandidat' => $this->input->post('nickname', true),
             		'no_urut' => $this->input->post('no_urut', true),
             		'gambar ' => $gambar['file_name'],
             		'nama_ketua' => $this->input->post('nama_ketua', true),
             		'nama_wakil' => $this->input->post('nama_wakil', true),
             		'visi' => $this->input->post('visi', true),
             		'misi' => $this->input->post('misi', true)

             	];
             	$this->db->insert('kandidat', $data);
             	$this->session->set_flashdata('berhasil','Data berhasil ditambahkan');
             	redirect('admin/kandidat');
             }
		}
	}

	public function hapus_kandidat($id){
		$this->db->delete('kandidat', ['id'=> $id]);
		$this->session->set_flashdata('berhasil', 'Data berhasil di hapus');
		redirect('admin/kandidat');
	}

	public function detail_kandidat($id) {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'Panel Admin';
		$data['kandidat'] = $this->M_vote->detail_kandidat($id);
		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/kandidat/detail_kandidat');
		$this->load->view('admin/index/footer');
	}

	public function kanedit($id){
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['kandidat'] = $this->M_vote->tampil_kandidatbyid($id);
		$data['judul'] = 'Edit';
		$data['nomor'] = ["1","2","3","4"];

		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/kandidat/edit_kandidat');
		$this->load->view('admin/index/footer');
			// $config['upload_path']          = './asset/upload';
   //          $config['allowed_types']        = 'gif|jpg|png';
   //          $config['max_size']             = 1024000990;
   //          $this->load->library('upload',$config);
   //          $this->upload->initialize($config);
   //          if(!$this->upload->do_upload('gambar')){
   //          	$error = array('error' => $this->upload->display_errors());
   //           	print_r($error);
   //          }else{
   //           	$gambar = $this->upload->data();

             	// $data = [
             	// 	'nickname_kandidat' => $this->input->post('nickname', true),
             	// 	'no_urut' => $this->input->post('no_urut', true),
             	// 	// 'gambar ' => $gambar['file_name'],
             	// 	'nama_ketua' => $this->input->post('nama_ketua', true),
             	// 	'nama_wakil' => $this->input->post('nama_wakil', true),
             	// 	'visi' => $this->input->post('visi', true),
             	// 	'misi' => $this->input->post('misi', true)
             	// ];
             	// $this->M_vote->edit_kandidat($data);
             	// // redirect('admin/kandidat');
            // }
	}
	
	
	public function latihan() {
		$data['user'] = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
		$data['judul'] = 'latihan';

		$this->load->view('admin/index/header', $data);
		$this->load->view('admin/index/latihan');
		$this->load->view('admin/index/footer');
	}


}
?>
