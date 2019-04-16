<?php 
class M_vote extends CI_Model{
	public function vote($data,$table) {
		$this->db->insert($table,$data);
	}

	public function tampil_kandidat() {
		return $this->db->get('kandidat')->result_array();

	}

	function tampil_kandidatbyid($id){
		  return $this->db->get_where('kandidat',['id' => $id])->row_array();
	}


	function hasil(){
		$this->db->from('kandidat');
		$this->db->select('vote.kandidat,kandidat.id,kandidat.no_urut,kandidat.nickname_kandidat,kandidat.nama_ketua,kandidat.nama_wakil,kandidat.gambar');
		$this->db->select('count(vote.kandidat) as hasil_v ');
		$this->db->join('vote','kandidat.id = vote.kandidat','left');
		$this->db->group_by('kandidat.id');
		return $this->db->get()->result_array();
	}
	function getAllsuara() {
		$this->db->from('vote');
		$this->db->select('vote.nis,vote.kandidat,vote.id,kandidat.nickname_kandidat');
		$this->db->join('kandidat','vote.kandidat = kandidat.id');
		$this->db->group_by('id');
		$query = $this->db->get();
		return $query->result();
	}

	function detail_kandidat($id){
		$this->db->from('kandidat');
		$this->db->select('vote.kandidat,kandidat.id,kandidat.no_urut,kandidat.nickname_kandidat,kandidat.nama_ketua,kandidat.nama_wakil,kandidat.gambar,kandidat.visi,kandidat.misi');
		$this->db->select('count(vote.kandidat) as hasil_v ');
		$this->db->join('vote','kandidat.id = vote.kandidat','left')->where('kandidat.id',$id);
		$this->db->group_by('kandidat.id');
		return $this->db->get()->row_array();
	}

	function edit_kandidat($data){
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kandidat', $data);
	}

	function hasil1(){
		$this->db->from('kandidat');
		$this->db->select('vote.kandidat,kandidat.id,kandidat.no_urut,kandidat.nickname_kandidat,kandidat.nama_ketua,kandidat.nama_wakil,kandidat.gambar');
		$this->db->select('count(vote.kandidat) as hasil_v ');
		$this->db->join('vote','kandidat.no_urut = vote.kandidat','left')->where('kandidat.no_urut',1);
		$this->db->group_by('kandidat.id');
		return $this->db->get()->row_array();
	}

	function hasil2(){
		$this->db->from('kandidat');
		$this->db->select('vote.kandidat,kandidat.id,kandidat.no_urut,kandidat.nickname_kandidat,kandidat.nama_ketua,kandidat.nama_wakil,kandidat.gambar');
		$this->db->select('count(vote.kandidat) as hasil_v ');
		$this->db->join('vote','kandidat.no_urut = vote.kandidat','left')->where('kandidat.no_urut',2);
		$this->db->group_by('kandidat.id');
		return $this->db->get()->row_array();
	}

	function hasil3(){
		$this->db->from('kandidat');
		$this->db->select('vote.kandidat,kandidat.id,kandidat.no_urut,kandidat.nickname_kandidat,kandidat.nama_ketua,kandidat.nama_wakil,kandidat.gambar');
		$this->db->select('count(vote.kandidat) as hasil_v ');
		$this->db->join('vote','kandidat.no_urut = vote.kandidat','left')->where('kandidat.no_urut',3);
		$this->db->group_by('kandidat.id');
		return $this->db->get()->row_array();
	}
}
?>