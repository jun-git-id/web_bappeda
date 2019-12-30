<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofil extends CI_Model {

	// public function auth($page, $pass){
	// 	$this->db->where('page', $page);
	// 	$this->db->where('pass', $pass);
	// 	return $this->db->get('page');
	// }

	public function create($data){
		return $this->db->insert('page', $data);
	}

	//fungsi untuk melihat data page
	public function show(){
		return $this->db->get('page');
	}

	//fungsi untuk melihat data page berdasarkan id
	public function readById($id){
		$this->db->where('id', $id);
		return $this->db->get('page');
	}



	//fungsi untuk mengedit data page
	public function update($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('page', $data);
	}

	//fungsi untuk menghapus data page
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('page');
	}
}