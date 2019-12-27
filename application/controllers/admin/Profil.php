<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
			$data['data_menu'] = $this->db->get('page')->result_array();

		$this->load->view('backend/template/header');
		$this->load->view('backend/profil/menu_profil',$data);
		$this->load->view('backend/template/footer');
		// var_dump($data['data']);
	}

	public function latar_belakang(){
		$data['data'] = $this->db->where('
			page','latar-belakang')->get('page')->row_array();

		$this->load->view('backend/template/header');
		$this->load->view('backend/profil/latar_belakang',$data);
		$this->load->view('backend/template/footer');
		// var_dump($data['data']);
	}

	function edit_latar_belakang(){
		$data = $this->db->where('id',$this->input->post('id'))->get('page')->row_array();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	function update_latar_belakang(){
		$data = array(
			'isi' => $this->input->post('isi')
		);
		$this->db->where('id',$this->input->post('xid'))->update('page',$data);
		redirect('admin/profil/latar_belakang');
	}

	public function visi_misi(){
		$data['data'] = $this->db->where('
			page','visi_misi')->get('page')->row_array();

		$this->load->view('backend/template/header');
		$this->load->view('backend/profil/visi_misi',$data);
		$this->load->view('backend/template/footer');
		// var_dump($data['data']);
	}

	function edit_visi_misi(){
		$data = $this->db->where('id',$this->input->post('id'))->get('page')->row_array();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	function update_visi_misi(){
		$data = array(
			'isi' => $this->input->post('isi')
		);
		$this->db->where('id',$this->input->post('xid'))->update('page',$data);
		redirect('admin/profil/visi_misi');
	}

	public function struktur_organisasi(){
		$data['data'] = $this->db->where('page','struktur')->get('page')->row_array();
		$this->load->view('backend/template/header');
		$this->load->view('backend/profil/struktur',$data);
		$this->load->view('backend/template/footer');
	}

	function edit_struktur(){
		$data = $this->db->where('id',$this->input->post('id'))->get('page')->row_array();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	function update_struktur(){
		$data = array(
			'isi' => $this->input->post('isi')
		);
		$this->db->where('id',$this->input->post('xid'))->update('page',$data);
		redirect('admin/profil/struktur_organisasi');
	}

}
