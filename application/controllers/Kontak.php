<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$breadcumbs = '<span class="theme-color">Kontak</span>';
		$title = 'Kontak Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('kontak/info',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'data' => array(),
				'og' => array(
					'url' => base_url(''),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				)
			],true),
			'title' => $title
		]);
	}

	// function message(){
	// 	$data = $this->input->post();
	// 	$data['tgl_input'] = date('Y-m-d H:i:s');
	// 	$this->db->insert('kontak',$data);
	// 	$resp = array(
	// 		'respon' => 'Pesan Berhasil Dikirim'
	// 	);

	// 	header('Content-Type: application/json');
	// 	echo json_encode($resp);
	// }
}