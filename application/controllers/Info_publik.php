<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_publik extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		redirect('');
	}

	public function sertamerta(){
		$breadcumbs = '<span class="theme-color">Serta Merta</span>';
		$data['data'] = $this->db->where('kategori','Serta Merta')->order_by('tgl_input','desc')->get('info_publik')->result_array();
		$title = 'Serta Merta - Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('info_publik/serta_merta',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'data' => $data['data'],
				'og' => array(
					'url' => base_url('info_publik/serta_merta'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);
	}

	function tambah_hit_info($id){
		$x = $this->db->where('id_info', $id)->get('info_publik')->row_array();
		$count = array(
			'hit_count' => $x['hit_count']+1
		);

		$this->db->where('id_info',$x['id_info'])->update('info_publik',$count);
		echo json_encode($count);
	}



}