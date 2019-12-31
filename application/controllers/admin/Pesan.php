<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['data'] = $this->db->order_by('status','asc')->order_by('tgl_input','asc')->get('kontak')->result_array();
		$this->load->view('backend/template/header');
		$this->load->view('backend/media/pesan',$data);
		$this->load->view('backend/template/footer');
	}

	function balas(){
		$id= $_POST['id'];
		$data['status'] = '1';
		//
		// Konfigurasi email
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
	    $ci->email->message($_POST['balas_pesan']);
	    if ($this->email->send()) {
					$this->db->where('id',$id)->update('kontak',$data);
	        redirect('index.php/admin/pesan');
	    } else {
	        show_error($this->email->print_debugger());
	    }
	}

	function hapus($id){
		$this->db->where('id',$id)->delete('kontak');
		redirect('admin/pesan');
	}

}
