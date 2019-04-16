<?php 
class M_user extends CI_Model{
	function getAlluser() {
		$this->db->from('user');
		$this->db->select('user.nis,user.nama,user.kelas,user.jurusan,user.tanggal_lahir,user.id,vote.status');
		$this->db->join('vote','user.nis = vote.nis','left');
		$this->db->order_by('user.nama','asc');
		$query = $this->db->get();
		return $query->result();
	}
}
?>