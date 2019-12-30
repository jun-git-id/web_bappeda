<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdownload extends CI_Model {

	// public function auth($download, $pass){
	// 	$this->db->where('download', $download);
	// 	$this->db->where('pass', $pass);
	// 	return $this->db->get('download');
	// }

	public function create($data){
		return $this->db->insert('download', $data);
	}

	//fungsi untuk melihat data download
	public function show(){
		return $this->db->get('download');
	}

	//fungsi untuk melihat data download berdasarkan id
	public function readById($id){
		$this->db->where('id', $id);
		return $this->db->get('download');
	}



	//fungsi untuk mengedit data download
	public function update($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('download', $data);
	}

	//fungsi untuk menghapus data download
	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('download');
	}
}