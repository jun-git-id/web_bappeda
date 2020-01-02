<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect('admin/login');
	    }
	}

	public function index()
	{
		$data['jml_post'] = count($this->db->get('posts')->result_array());
		$data['jml_file'] = count($this->db->get('download')->result_array());
		$data['jml_user'] = count($this->db->get('user')->result_array());
		$data['jml_carousel'] = count($this->db->get('carousel')->result_array());
		$this->load->view('backend/template/header');
		$this->load->view('backend/dashboard', $data);
		$this->load->view('backend/template/footer');
		// echo $data['jml_post'];
		// echo $this->session->userdata('status');
		// echo $this->session->userdata('level');
	}

	public function get_post()
	{
		for ($i=1; $i <= 12 ; $i++) { 
			$data[] = array(
				"posts" => count($this->db->where('month(tanggal)', $i)->get('posts')->result_array())
			);
		}
		header('Content-Type: application/json');
		echo json_encode($data);
	}


	function grafikperhari($bulan,$tahun){
		$list=array();
		$month = $bulan;
		$year = $tahun;

		for($d=1; $d<=31; $d++)
		{
		    $time=mktime(12, 0, 0, $month, $d, $year);          
		    if (date('m', $time)==$month)       
		        $list[]=date('Y-m-d-D', $time);
		}
		for ($x=0; $x < count($list); $x++) { 
			$hari = $x+1;
			$data[] = array(
				'pelaporan' => $this->grafikHari('pelaporan',$bulan,$hari,'tanggal_input')
			);
		}
		header('Content-Type: application/json');
		$json_string = json_encode($data, JSON_PRETTY_PRINT);
		echo $json_string;
	}

	function grafikPerbulan(){
		for ($i=1; $i <= 12 ; $i++) { 
			$data[] = array(
				"pelaporan" => count($this->db->where('month(tanggal_input)', $i)->get('pelaporan')->result_array())
			);
		}

		header('Content-Type: application/json');
		$json_string = json_encode($data, JSON_PRETTY_PRINT);
		echo $json_string;
	}

	function grafikHari($table,$bulan,$hari,$cek){
		$where = array('month('.$cek.')' => $bulan, 'day('.$cek.')' => $hari);
		return count($this->db->where($where)->get($table)->result_array());
	}

	function grafikBulan($table,$bulan,$cek){
		$where = array('month('.$cek.')' => $bulan);
		return count($this->db->where($where)->get($table)->result_array());
	}

}
