<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	function visimisi(){

		$breadcumbs = '<span class="theme-color">Visi Misi</span>';
		$title = 'Visi Misi - Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('profil/visimisi',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/cari/'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);

	}

	function latarbelakang(){

		$breadcumbs = '<span class="theme-color">Latar Belakang</span>';
		$title = 'Latar Belakang - Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('profil/latarbelakang',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/cari/'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);

	}

		function bagan(){

		$breadcumbs = '<span class="theme-color">Struktu Organisasi</span>';
		$title = 'Struktu Organisasi - Bappeda Litbang Kabupaten Pekalongan';

		$this->load->view('front/template',[
			'content' => $this->load->view('profil/bagan',[
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/cari/'),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);

	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */