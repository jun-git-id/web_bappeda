<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['data'] = $this->db->order_by('status','asc')->order_by('tgl_komen','asc')->get('komentar')->result_array();
		$this->load->view('backend/template/header');
		$this->load->view('backend/media/komentar',$data);
		$this->load->view('backend/template/footer');
	}

	function tampilkan($id){
		$data = array(
		    'status'      => 1
		);

		$this->db->where('id',$id)->update('komentar',$data);
		redirect('admin/komentar');
		// var_dump($data);
	}

	function sembunyikan($id){
		$data = array(
		    'status'      => 0
		);

		$this->db->where('id',$id)->update('komentar',$data);
		redirect('admin/komentar');
		// var_dump($data);
	}

	function balas(){
		$ci = get_instance();
	    $ci->load->library('email');
	    $config['protocol'] = "smtp";
	    $config['smtp_host'] = "ssl://smtp.gmail.com";
	    $config['smtp_port'] = "465";
	    $config['smtp_user'] = "bappedapkl.kab@gmail.com";
	    $config['smtp_pass'] = "bappeda_123";
	    $config['charset'] = "utf-8";
	    $config['mailtype'] = "html";
	    $config['newline'] = "\r\n";
	    $ci->email->initialize($config);
	    $ci->email->from('bappedapkl.kab@gmail.com', 'BAppeda Litbang Kabupaten Pekalongan');
	    $list = array($_POST['email']);
	    $ci->email->to($list);
	    $ci->email->subject('Kontak Bappeda Litbang Kabupaten Pekalongan');
	    $ci->email->message($_POST['balasan']);
	    if ($this->email->send()) {
	    	$this->session->set_flashdata('alert','<div class="alert alert-info alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="far fa-trash"></i></span> </button> <strong>Berhasil!</strong> Balasan Anda Terkirim.</div>');
	    } else {
	        // show_error($this->email->print_debugger());
	        $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="far fa-trash"></i></span> </button> <strong>Berhasil!</strong> Balasan Gagal Terkirim.</div>');
	        redirect('index.php/admin/pesan');
	    }

	    $data = array(
        		'balasan' 		=> $this->input->post('balasan'),
        		'id_komentar' 	=> $this->input->post('id_komentar'),
        		'tgl_balas' 	=> date('Y-m-d H:i:s'),
        		'username' 		=> $this->input->post('username')
        	);

	    $this->db->insert('balasan',$data);

	    $status = array(
		    'status'      => 2
		);
		$this->db->where('id',$this->input->post('id_komentar'))->update('komentar',$status);

		$notif = $this->db->where('id',$data['id_komentar'])->get('komentar')->row_array();

		one_signal_no_image($notif['user_notif'],'Komentar anda Sudah di Tanggapi',$data['balasan'],base_url('berita/detail/').$notif['link']);
		
		redirect('admin/komentar');



		// $email = $this->input->post('email');
		// $balasan = $this->input->post('balasan');
		// $ci = get_instance();
	 //    $ci->load->library('email');
	 //    $config['protocol'] = "smtp";
	 //    $config['smtp_host'] = "ssl://smtp.gmail.com";
	 //    $config['smtp_port'] = "465";
	 //    $config['smtp_user'] = "bappedapkl.kab@gmail.com";
	 //    $config['smtp_pass'] = "bappeda_123";
	 //    $config['charset'] = "utf-8";
	 //    $config['mailtype'] = "html";
	 //    $config['newline'] = "\r\n";
	 //    $ci->email->initialize($config);
	 //    $ci->email->from('bappedapkl.kab@gmail.com', 'BAPPEDA LITBANG');
	 //    $ci->email->to('email');
	 //    $ci->email->subject('Balasan Admin Bappeda Litbang');
	 //    $ci->email->message($balasan." <br/> <br/> Hormat Kami, <br/><br/><br/>Admin Bappeda Litbang Kab. Pekalongan");

	 //    if ($this->email->send()) {
	 //        $this->session->set_flashdata('alert','<div class="alert alert-info alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"><i class="far fa-trash"></i></span> </button> <strong>Berhasil!</strong> Balasan Anda Terkirim.</div>');
	 //    } else {
	 //        show_error($this->email->print_debugger());
	 //    }
	    
	
	}
}

/* End of file Komentar.php */
/* Location: ./application/controllers/admin/Komentar.php */
