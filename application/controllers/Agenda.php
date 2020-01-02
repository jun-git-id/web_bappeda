<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	private $db2;

	private $perPage = 3;

	public function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
		
	}

	function index(){

		// $siratu = $this->db2->get('ruangrapat')->result();

		// foreach ($siratu as $k) {
		// 	echo $k->ruang;
		// }
		

		$breadcumbs = '<span class="theme-color">Agenda</span>';
		$title = 'Agenda Ruang Rapat - Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('agenda/index',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/cari/'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true),
				'data_siratu' => $this->db2->get('ruangrapat')->result()

			],true),
			'title' => $title
		]);

	}

}