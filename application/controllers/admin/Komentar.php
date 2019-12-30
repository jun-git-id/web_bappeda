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
		// $email = $this->input->post('email');
		// $ci = get_instance();
	 //    $ci->load->library('email');
	 //    $config['protocol'] = "smtp";
	 //    $config['smtp_host'] = "ssl://smtp.gmail.com";
	 //    $config['smtp_port'] = "465";
	 //    $config['smtp_user'] = "einfostmikwp@gmail.com";
	 //    $config['smtp_pass'] = "gottic76";
	 //    $config['charset'] = "utf-8";
	 //    $config['mailtype'] = "html";
	 //    $config['newline'] = "\r\n";
	 //    $ci->email->initialize($config);
	 //    $ci->email->from('einfostmikwp@gmail.com', 'BAPPEDA LITBANG');
	 //    $ci->email->to($email);
	 //    $ci->email->subject('INI JUDUL');
	 //    $ci->email->message('INI ISI EMAIL');

	 //    if ($this->email->send()) {
	 //        echo 'Email sent.';
	 //    } else {
	 //        show_error($this->email->print_debugger());
	 //    }

		$data = array(
        		'balasan' 		=> $this->input->post('balasan'),
        		'id_komentar' 	=> $this->input->post('id_komentar'),
        		'tgl_balas' 	=> date('Y-m-d H:i:s'),
        		'username' 		=> $this->input->post('username'),
        	);

	    $this->db->insert('balasan',$data);
	    
	    $status = array( 
		    'status'      => 2
		);

		$this->db->where('id',$this->input->post('id_komentar'))->update('komentar',$status);
		redirect('admin/komentar');
	}
}

/* End of file Komentar.php */
/* Location: ./application/controllers/admin/Komentar.php */