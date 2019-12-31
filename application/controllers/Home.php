<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$title = 'Website Bappeda Litbang Kabupaten Pekalongan';
		$slideshow = $this->db->where('status_post','1')->get('carousel')->result_array();
		$aplikasi = $this->db->get('aplikasi')->result_array();

		$this->load->view('front/template',[
			'content' => $this->load->view('front/home',[
				'data' => array(),
				'aplikasi' => $aplikasi,
				'carousel' => $slideshow,
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
	
}
