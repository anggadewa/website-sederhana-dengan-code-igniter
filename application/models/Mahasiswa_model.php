<?php 

class Mahasiswa_model extends CI_model {
	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
		// return $query->result_array();
	}
	public function tambahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true), 
			"npm" => $this->input->post('npm', true),
			"kelas" => $this->input->post('kelas', true)
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function hapusDataMahasiswa($id)
	{
		// $this->db->where('id', $id);
		$this->db->delete('mahasiswa', ['id' => $id]);
	}

	public function getMahasiswaById($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
		"nama" => $this->input->post('nama', true),
		"npm" => $this->input->post('npm', true),
		"kelas" => $this->input->post('kelas', true)
		];
		
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('kelas', $keyword);
		$this->db->or_like('npm', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}
}
