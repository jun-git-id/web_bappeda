<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	// public function index()
	// {
	// 	$this->load->view('front/template',[
	// 		'content' => $this->load->view('berita/index',[
	// 			'data' => array()
	// 		],true),
	// 		'title' => 'Judul'
	// 	]);	
	// }

	public function index()
	{
		$this->load->view('welcome_uit');
	}
	
}
