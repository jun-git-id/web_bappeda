<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_publik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('minfo_publik');
	}

	public function index(){
		$data['data'] = $this->db->order_by('tgl_input','desc')->get('info_publik')->result_array();
		$this->load->view('backend/template/header');
		$this->load->view('backend/media/info_publik',$data);
		$this->load->view('backend/template/footer');
	}

	function save(){
		$data = $this->input->post();
		$uid  = uniqid();

        $ext = pathinfo($_FILES['userFile']['name'], PATHINFO_EXTENSION);
        $config['upload_path'] = './assets/info_publik/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $uid.'-'.str_replace(" ", "_", $_FILES['userFile']['name']);
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('userFile')){

        	$filedata = array(
        		'nama_unduhan' 	=> $data['nama_unduhan'],
        		'keterangan' 	=> $data['keterangan'],
        		'file' 			=> $config['file_name'],
        		'tahun' 		=> $data['tahun'],
        		'tgl_input' 	=> date('Y-m-d H:i:s'),
        		'kategori' 		=> $data['kategori'],
        		'username' 		=> $data['username']
        	);

        	$this->minfo_publik->create($filedata);
        	var_dump($filedata);

        }else{
			$error = array ('error' => $this->upload->display_errors());
			// var_dump($error);
		}

		$this->session->set_flashdata('alert','<div class="alert alert-info alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="far fa-trash"></i></span> </button> <strong>Berhasil!</strong> Data Informasi Publik berhasil disimpan.</div>');
		redirect('admin/info_publik');
	}

	function hapus($id){
		$data = $this->db->where('id_info',$id)->get('info_publik')->row_array();
		$this->db->where('id_info',$id)->delete('info_publik');
		unlink('./assets/info_publik/'.$data['file']);
		redirect('admin/info_publik');
	}

	function edit(){
		$data = $this->db->where('id_info',$this->input->post('id_info'))->get('info_publik')->row_array();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	function unduh($id){
		$data = $this->db->where('id',$id)->get('info_publik')->row_array();
		echo $data['nama_unduhan'];
		// redirect('admin/info_publik');
	}

	function update(){
		$data = $this->input->post();
		$id = $this->input->post('id_info');
		unset($data['id_info']);

		if ($_FILES['userFile']['size'] == 0) {
			$filedata = array(
				'nama_unduhan' 	=> $data['nama_unduhan'],
        		'keterangan' 	=> $data['keterangan'],
        		'tahun' 		=> $data['tahun'],
        		'kategori' 		=> $data['kategori'],
        		'username' 		=> $data['username']
			);

			$this->session->set_flashdata('alert','<div class="alert alert-secondary alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="fal fa-window-close"></i></span> </button> <strong>Berhasil!</strong> Data Informasi Publik berhasil diperbarui.</div>');

		}else{
			$uid = uniqid();

			$config['upload_path'] = './assets/info_publik/';
			$config['allowed_types'] = '*';
			$config['file_name'] = $uid.'-'.str_replace(" ", "_", $_FILES['userFile']['name']);

			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('userFile')){
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			}else{
				$filedata = array(
					'nama_unduhan' 	=> $data['nama_unduhan'],
	        		'keterangan' 	=> $data['keterangan'],
	        		'file' 			=> $config['file_name'],
	        		'tahun' 		=> $data['tahun'],
	        		'kategori' 		=> $data['kategori'],
	        		'username' 		=> $data['username']
				);

				$u = $this->db->where('id_info',$id)->get('info_publik')->row_array();
				unlink('./assets/info_publik/'.$u['file']);

				$this->session->set_flashdata('alert','<div class="alert alert-secondary alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="fal fa-window-close"></i></span> </button> <strong>Berhasil!</strong> Data Informasi Publik berhasil diperbarui.</div>');

			}
		}

		$this->db->where('id_info',$id)->update('info_publik',$filedata);
		redirect('admin/info_publik');
		// var_dump($filedata);
	}

}
