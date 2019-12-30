<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbidang extends CI_Model {

	// public function auth($bidang, $pass){
	// 	$this->db->where('bidang', $bidang);
	// 	$this->db->where('pass', $pass);
	// 	return $this->db->get('bidang');
	// }

	public function create($data){
		return $this->db->insert('bidang', $data);
	}

	//fungsi untuk melihat data bidang
	public function show(){
		return $this->db->get('bidang');
	}

	//fungsi untuk melihat data bidang berdasarkan id
	public function readById($id){
		$this->db->where('id', $id);
		return $this->db->get('bidang');
	}



	//fungsi untuk mengedit data bidang
	public function update($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('bidang', $data);
	}

	//fungsi untuk menghapus data bidang
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('bidang');
	}
}