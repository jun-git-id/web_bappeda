<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infopublik extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		redirect('');
	}

	public function sertamerta(){
		// $data['breadcumbs'] = 'Media / Download';
		// $data['data'] = $this->db->where('kategori','download')->order_by('tgl_input','desc')->get('download')->result_array();
		$title = 'Unduh Data Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('infopublik/sertmerta',[
				// 'data' => $data['data'],
				'og' => array(
					'url' => base_url('infopublik/sertamerta'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				)
			],true),
			'title' => $title
		]);	
		// $this->load->view('template/footer');
	}

	// function galeri(){
	// 	$data['breadcumbs'] = 'Media / Galeri';
	// 	$this->load->view('template/header');
	// 	$this->load->view('media/galeri',$data);
	// 	$this->load->view('template/footer');
	// }

	// function tambah_dl(){
	// 	$x = $this->db->where('id',$this->input->post('id'))->get('download')->row_array();
	// 	$file = array(
	// 		'hit_count' => $x['hit_count']+1
	// 	);

	// 	$this->db->where('id',$x['id'])->update('download',$file);
	// 	echo json_encode($file);
	// }

}