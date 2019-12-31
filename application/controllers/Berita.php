<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	private $perPage = 3;

	public function __construct(){
		parent::__construct();
	}

	function index(){
		redirect('berita/k/semua');
	}
	
	public function k($kategori){
		$this->load->library('pagination');
		$config['per_page'] = 4;

		if ($kategori == 'semua') {
			$jml_data = $this->db->select('posts.*')
			->from('posts')
			->where('status','1')
			->get()->num_rows();
			
			$config['base_url'] = base_url().'berita/k/'.$kategori.'/';
			$from = $this->uri->segment(4);
			$query = $this->db->select('bidang.*, posts.*')
			->from('posts')
			->join('bidang','bidang.id=posts.id_bidang','null')
			->where('status','1')
			->order_by('tanggal','desc')
			->limit($config['per_page'],$from)
			->get();

			$breadcumbs = '<span class="theme-color">Berita / Semua</span>';
			$title = 'Semua Berita Bappeda Litbang Kabupaten Pekalongan';
		}else{
			if ($kategori == 'sekretariat') {
				$id_bidang = '1';
			}else if ($kategori == 'program') {
				$id_bidang = '2';
			}else if ($kategori == 'ekoinfra') {
				$id_bidang = '3';
			}else if ($kategori == 'litbang') {
				$id_bidang = '4';
			}else{
				$id_bidang = '5';
			}
			
			$config['base_url'] = base_url().'berita/k/'.$kategori.'/';
			$jml_data = $query = $this->db->select('posts.*')
			->from('posts')
			->where('id_bidang',$id_bidang)
			->order_by('tanggal','desc')
			->get()->num_rows();

			$from = $this->uri->segment(4);

			$bidang = $this->db->where('id',$id_bidang)->get('bidang')->row_array();
			$query = $this->db->select('bidang.*, posts.*')
			->from('posts')
			->join('bidang','bidang.id=posts.id_bidang')
			->where('status','1')
			->where('id_bidang',$id_bidang)
			->order_by('tanggal','desc')
			->limit($config['per_page'],$from)
			->get();

			$breadcumbs = '<span class="theme-color">Berita / '.$bidang['nama_bidang'].'</span>';
			$title = 'Berita '.$bidang['nama_bidang'].' Bappeda Litbang Kabupaten Pekalongan';
		}

		$data['posts'] = $query->result_array();
		$config['total_rows'] = $jml_data;
		$z = 0;

	    while ($z < count($data['posts'])) {
      		$resp = $this->db->where('id_post',$data['posts'][$z]['id'])->get('thumbnail')->result_array();

      		if ($resp) {
      			foreach ($resp as $v) {
	      			$data['posts'][$z]['thumbnail'][] = array(
	      				'nama_file' => $v['nama_file']
	      			);
	      		}	
      		}else{
      			$data['posts'][$z]['thumbnail'] = array();
      		}
      		
        	$z += 1;
	    }
		
		
		$config['first_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-to-left"></i></li>';
		$config['last_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-to-right"></i></li>';
		$config['next_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-right"></i></li>';
		$config['prev_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-left"></i></li>';

		$config['cur_tag_open'] = '<li class="page-item active"><div class="page-link">';
		$config['cur_tag_close'] = '</div></li>';
		$config['num_tag_open'] = '<li class="page-item"><div class="page-link">';
		$config['num_tag_close'] = '</div></li>';

		$this->pagination->initialize($config);

		$this->load->view('front/template',[
			'content' => $this->load->view('berita/index',[
				'data' => $data['posts'],
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/k/'.$kategori),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);
	}

	function cari(){
		if (isset($_POST['s'])) {
			$this->session->set_userdata('key',$this->input->post('s'));
		}
		$this->load->library('pagination');
		$config['per_page'] = 4;

		$jml_data = $this->db->select('bidang.*, posts.*')
		->from('posts')
		->join('bidang','bidang.id=posts.id_bidang','null')
		->where('status','1')
		->where("CONCAT(judul,' ',nama_bidang,' ',isi,' ',tags) LIKE '%".$this->session->userdata('key')."%'", NULL, false)
		->order_by('tanggal','desc')
		->get()->num_rows();

			
		$config['base_url'] = base_url().'berita/cari/';
		$from = $this->uri->segment(3);
		$query = $this->db->select('bidang.*, posts.*')
		->from('posts')
		->join('bidang','bidang.id=posts.id_bidang','null')
		->where('status','1')
		->where("CONCAT(judul,' ',nama_bidang,' ',isi,' ',tags) LIKE '%".$this->session->userdata('key')."%'", NULL, false)
		->order_by('tanggal','desc')
		->limit($config['per_page'],$from)
		->get();

		$breadcumbs = '<span class="theme-color">Berita / Pencarian / '.$key.'</span>';
		$title = 'Hasil Pencarian : '.$key;
		
		$data['posts'] = $query->result_array();
		$config['total_rows'] = $jml_data;
		$z = 0;

	    while ($z < count($data['posts'])) {
      		$resp = $this->db->where('id_post',$data['posts'][$z]['id'])->get('thumbnail')->result_array();

      		if ($resp) {
      			foreach ($resp as $v) {
	      			$data['posts'][$z]['thumbnail'][] = array(
	      				'nama_file' => $v['nama_file']
	      			);
	      		}	
      		}else{
      			$data['posts'][$z]['thumbnail'] = array();
      		}
      		
        	$z += 1;
	    }
		
		
		$config['first_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-to-left"></i></li>';
		$config['last_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-to-right"></i></li>';
		$config['next_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-right"></i></li>';
		$config['prev_link'] = '<li class="page-item page-link"><i class="fas fa-arrow-left"></i></li>';

		$config['cur_tag_open'] = '<li class="page-item active"><div class="page-link">';
		$config['cur_tag_close'] = '</div></li>';
		$config['num_tag_open'] = '<li class="page-item"><div class="page-link">';
		$config['num_tag_close'] = '</div></li>';

		$this->pagination->initialize($config);

		$this->load->view('front/template',[
			'content' => $this->load->view('berita/index',[
				'data' => $data['posts'],
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

	function tags(){
		$tag = $this->input->get('t');

		$query = $this->db->select('bidang.*, posts.*')
			->from('posts')
			->join('bidang','bidang.id=posts.id_bidang')
			->where('status','1')
			->like('tags',$tag)
			->order_by('tanggal','desc')
			->get();

		$breadcumbs = '<span class="theme-color">Berita / Tags / '.$tag.'</span>';
		$title = 'Berita Bappeda Litbang Tags : '.$tag;
		

		$data['posts'] = $query->result_array();
		$z = 0;

	    while ($z < count($data['posts'])) {
      		$resp = $this->db->where('id_post',$data['posts'][$z]['id'])->get('thumbnail')->result_array();

      		if ($resp) {
      			foreach ($resp as $v) {
	      			$data['posts'][$z]['thumbnail'][] = array(
	      				'nama_file' => $v['nama_file']
	      			);
	      		}	
      		}else{
      			$data['posts'][$z]['thumbnail'] = array();
      		}
      		
        	$z += 1;
	    }

		$this->load->view('front/template',[
			'content' => $this->load->view('berita/tags',[
				'data' => $data['posts'],
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a>'.$breadcumbs,
				'og' => array(
					'url' => base_url('berita/tags/'.$tag),
					'title' => $title,
					'description' => 'description',
					'image' => 'image'
				),
				'side_blog' => $this->load->view('side_blog',[],true)
			],true),
			'title' => $title
		]);
	}

	function detail($link){
		$query = $this->db->select('bidang.*, posts.*')
				->from('posts')
				->join('bidang','bidang.id=posts.id_bidang')
				->where('link',$link)
				->get();

		$data['p'] = $query->row_array();

		$hit_count = array(
			'hit_count' => $data['p']['hit_count']+1
		);
		$this->db->where('link',$link)->update('posts',$hit_count);

  		$resp = $this->db->where('id_post',$data['p']['id'])->get('thumbnail')->result_array();

  		if ($resp) {
  			foreach ($resp as $v) {
      			$data['p']['thumbnail'][] = array(
      				'nama_file' => $v['nama_file']
      			);
      		}	
  		}else{
  			$data['p']['thumbnail'] = array();
  		}

  		$ath = $this->db->where('id_post',$data['p']['id'])->get('attachment')->result_array();

  		if ($ath) {
  			foreach ($ath as $v) {
      			$data['p']['attachment'][] = array(
      				'nama_file' => $v['nama_file']
      			);
      		}
      		$image = $data['p']['thumbnail']['0']['nama_file'];
  		}else{
  			$data['p']['attachment'] = array();
  			$image = '';
  		}

  		// echo json_encode($data, JSON_PRETTY_PRINT);

		$this->load->view('front/template',[
			'content' => $this->load->view('berita/detail',[
				'p' => $data['p'],
				'breadcumb' => '<a style="color: #1e76bd !important" href="'.base_url().'">Beranda</a> / Detail',
				'og' => array(
					'url' => base_url('berita/detail/'.$link),
					'title' => $data['p']['judul'],
					'description' => strip_tags($data['p']['readmore']),
					'image' => $image
				),
				'side_blog' => $this->load->view('side_blog',[],true),
				'komentar' => $this->db->where('id_post',$data['p']['id'])->order_by('tgl_komen','desc')->get('komentar')->result_array()
			],true),
			'title' => $data['p']['judul']
		]);
	}

	function komen(){
		$data = $this->input->post();
		$link = $data['link'];
		$data['tgl_komen'] = date('Y-m-d H:i:s');

		$this->db->insert('komentar',$data);
		redirect('berita/detail/'.$link);
	}

	
}
