<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minfo_publik extends CI_Model {
	public function create($data){
		return $this->db->insert('info_publik', $data);
	}

	//fungsi untuk melihat data info_publik
	public function show(){
		return $this->db->get('info_publik');
	}

	//fungsi untuk melihat data info_publik berdasarkan id_info
	public function readByid_info($id_info){
		$this->db->where('id_info', $id_info);
		return $this->db->get('info_publik');
	}



	//fungsi untuk mengedit data info_publik
	public function update($data, $id_info){
		$this->db->where('id_info', $id_info);
		return $this->db->update('info_publik', $data);
	}

	//fungsi untuk menghapus data info_publik
	public function delete($id_info){
		$this->db->where('id_info', $id_info);
		return $this->db->delete('info_publik');
	}
}