<?php

class Android extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	function one_signal(){
		one_signal('petugas','judul','isi',base_url(''));
	}

	function kategori(){
		$data = $this->db->select('kategori.id, kategori, id_opd, nama_opd')
			->from('kategori')
			->join('opd','opd.id=kategori.id_opd')
			->get()->result_array();
		jsonku($data);
	}

	function nik(){
		// $nik = '3325111108790001';
		$nik = $this->input->get('nik');
		$key = md5('dprkp'.date('dmY'));
		$url = 'http://182.253.110.133:8008/index.html?user=dprkp&kunci='.$key.'&akses=nik&nomor_nik='.$nik;
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($ch);
		curl_close($ch);

		$data = json_decode($result, true);

		if(empty($data['data']['0']['nama_lengkap'])){
			if ($data['data']['0']['hasil'] == '') {
				$respon = 'N';
			}else{
				$respon = $data['data']['0']['hasil'];
			}
			$resp = array(
				'verifikasi' => 'gagal',
				'status' => '1',
				'respon' => $respon
			);
		}else{
			$resp = array(
				'verifikasi' => 'berhasil',
				'nama_lengkap' => ucwords(strtolower($data['data']['0']['nama_lengkap'])),
				'alamat' => ucwords(strtolower($data['data']['0']['alamat'].' RT '.$data['data']['0']['rt'].' RW '.$data['data']['0']['rw'].', '.$data['data']['0']['nama_kel'].', KECAMATAN '.$data['data']['0']['nama_kec']))
				// 'respon' => $data['data']['0']
			);
		}

		jsonku($resp);
	}

	function simpan_user(){
		$data = $this->input->post();
		if ($this->db->insert('pelapor',$data)) {
			$resp = array(
				'respon' => 'Berhaisl'
			);
		}else{
			$resp = array(
				'respon' => 'gagal'
			);
		}
		jsonku($resp);
	}

	function simpan_laporan(){
		$data = $this->input->post();
		$data['tgl_input'] = date('Y-m-d');
		$isi_laporan = 'Kategori : '.$data['kategori'].'<br/>'.$data['isi_laporan'].'<br/>'.tanggal_indo(date('Y-m-d'));
		$kat = $this->db->where('kategori',$data['kategori'])->get('kategori')->row_array();
		$data['kategori'] = $kat['id'];

		$foto = $this->db->where('id_laporan',$data['id'])->limit(1)->get('files')->row_array();
		
		if ($this->db->insert('laporan',$data)) {
			$resp = array(
				'respon' => 'Berhaisl'
			);
		}else{
			$resp = array(
				'respon' => 'gagal'
			);
		}

		jsonku($resp);

		one_signal('petugas','Laporan Masuk',strip_tags($data['isi_laporan']),base_url(''),base_url('uploads/files/'.$foto));
	}

	function upload_laporan(){
		$target_dir = "uploads/tmp/";  
		$target_file_name = $target_dir .$this->input->get('nama_file').'.jpg';  
		$response = array();
		
		if (isset($_FILES["file"]))   
		{  
		   if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_name)){  
		    $success = true;  
		    $message = "Successfully Uploaded";

		    $resized_file = 'uploads/files/'.$this->input->get('nama_file').'.jpg';
		    smart_resize_image($target_file_name , null, 512 , 288 , true , $resized_file , true , false ,100);
		     
		    $data['id_laporan'] = $this->input->get('id_laporan');
		    $data['nama_file'] = $this->input->get('nama_file').'.jpg';
		    $data['tgl_upload'] = date('Y-m-d H:i:s');

		    $this->db->insert('files',$data);

		   }else{  
		    $success = false;  
		    $message = "Error while uploading";  
		   }  
		}  
		else   
		{  
		    $success = false;  
		    $message = "Required Field Missing";  
		}  
		$response["success"] = $success;  
		$response["message"] = $message;

		echo json_encode($response);  
	}

	function show_laporan(){
		$data = array();
		$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->where('status !=','0')
			->get()->result_array();

		foreach ($laporan as $l) {
			// $location = explode(",", $l['latlng']);
			// $jarak = distance($location[0],$location[1],$lat,$lng);

			$photo='';
			if ($foto = $this->db->where('id_laporan',$l['id'])->get('files')->result_array()) {
				foreach ($foto as $f) {
					$photo .= $f['nama_file'].';';
				}
				$photo = substr($photo, 0, -1);
			}else{
				$photo = '-';
			}

			if ($l['status'] == '1') {
				$status = 'Terverifikasi';
			}else if ($l['status'] == '2') {
				$status = 'Ditindaklanjuti';
			}else{
				$status = 'Selesai';
			}

			if ($l['disposisi'] != '-') {
				$dispo = $this->db->where('id',$l['disposisi'])->get('opd')->row_array();
				$disposisi = $dispo['nama_opd'];
			}else{
				$disposisi = '-';
			}

			$data[] = array(
				'id' => $l['id'],
				'nama_lengkap' => $l['nama_lengkap'],
				'kategori' => $l['kategori'],
				'isi_laporan' => $l['isi_laporan'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($l['tgl_input'])), true).'. '.date('H.i', strtotime($l['tgl_input'])).' WIB',
				'lokasi_kejadian' => $l['lokasi_kejadian'],
				// 'jarak' => number_format((float)$jarak, 2, '.', '')." km",
				'jarak' => $l['latlng'],
				'disposisi' => $disposisi,
				'status_kode' => $l['status'],
				'status' => $status,
				'foto' => $photo
			);
		}

		sort_array_by_value('jarak',$data);
		$data = array_values($data);

		$index = 0;

		if(isset($_GET['index'])){
			$index = $_GET['index'];
		}

		$end = $index + 4;

		if($index > (count($data) -1)){
			echo json_encode(array());
			exit;
		}

		if($end > (count($data) -1)){
			$end = count($data) -1;
		}

		$resp = array();
		for($i=$index;$i<=$end;$i++){
			$resp[] = $data[$i];
		}

		jsonku($resp);
	}

	function show_laporan_by(){
		// $lat = $this->input->get('lat');
		// $lng = $this->input->get('lng');
		$data = array();
		$kategori = $this->input->get('kategori');

		if ($kategori == '1' | $kategori == '2' | $kategori == '3') {
			$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->where('status',$kategori)
			->get()->result_array();
		}else{
			$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->where('laporan.kategori',$kategori)
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->where('status !=','0')
			->get()->result_array();
		}

		


		foreach ($laporan as $l) {
			// $location = explode(",", $l['latlng']);
			// $jarak = distance($location[0],$location[1],$lat,$lng);

			$photo='';
			if ($foto = $this->db->where('id_laporan',$l['id'])->get('files')->result_array()) {
				foreach ($foto as $f) {
					$photo .= $f['nama_file'].';';
				}
				$photo = substr($photo, 0, -1);
			}else{
				$photo = '-';
			}

			if ($l['status'] == '1') {
				$status = 'Terverifikasi';
			}else if ($l['status'] == '2') {
				$status = 'Ditindaklanjuti';
			}else{
				$status = 'Selesai';
			}

			if ($l['disposisi'] != '-') {
				$dispo = $this->db->where('id',$l['disposisi'])->get('opd')->row_array();
				$disposisi = $dispo['nama_opd'];
			}else{
				$disposisi = '-';
			}

			$data[] = array(
				'id' => $l['id'],
				'nama_lengkap' => $l['nama_lengkap'],
				'kategori' => $l['kategori'],
				'isi_laporan' => $l['isi_laporan'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($l['tgl_input'])), true).'. '.date('H.i', strtotime($l['tgl_input'])).' WIB',
				'lokasi_kejadian' => $l['lokasi_kejadian'],
				// 'jarak' => number_format((float)$jarak, 2, '.', '')." km",
				'jarak' => $l['latlng'],
				'disposisi' => $disposisi,
				'status_kode' => $l['status'],
				'status' => $status,
				'foto' => $photo
			);
		}

		sort_array_by_value('jarak',$data);
		$data = array_values($data);

		$index = 0;

		if(isset($_GET['index'])){
			$index = $_GET['index'];
		}

		$end = $index + 4;

		if($index > (count($data) -1)){
			echo json_encode(array());
			exit;
		}

		if($end > (count($data) -1)){
			$end = count($data) -1;
		}

		$resp = array();
		for($i=$index;$i<=$end;$i++){
			$resp[] = $data[$i];
		}

		jsonku($resp);
	}

	function search_laporan(){
		$key = $this->input->get('key');
		$data = array();
		$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->like('isi_laporan',$key)
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->get()->result_array();

		foreach ($laporan as $l) {
			// $location = explode(",", $l['latlng']);
			// $jarak = distance($location[0],$location[1],$lat,$lng);

			$photo='';
			if ($foto = $this->db->where('id_laporan',$l['id'])->get('files')->result_array()) {
				foreach ($foto as $f) {
					$photo .= $f['nama_file'].';';
				}
				$photo = substr($photo, 0, -1);
			}else{
				$photo = '-';
			}

			if ($l['status'] == '1') {
				$status = 'Terverifikasi';
			}else if ($l['status'] == '2') {
				$status = 'Ditindaklanjuti';
			}else{
				$status = 'Selesai';
			}

			if ($l['disposisi'] != '-') {
				$dispo = $this->db->where('id',$l['disposisi'])->get('opd')->row_array();
				$disposisi = $dispo['nama_opd'];
			}else{
				$disposisi = '-';
			}

			$data[] = array(
				'id' => $l['id'],
				'nama_lengkap' => $l['nama_lengkap'],
				'kategori' => $l['kategori'],
				'isi_laporan' => $l['isi_laporan'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($l['tgl_input'])), true).'. '.date('H.i', strtotime($l['tgl_input'])).' WIB',
				'lokasi_kejadian' => $l['lokasi_kejadian'],
				// 'jarak' => number_format((float)$jarak, 2, '.', '')." km",
				'jarak' => $l['latlng'],
				'disposisi' => $disposisi,
				'status_kode' => $l['status'],
				'status' => $status,
				'foto' => $photo
			);
		}

		jsonku($data);
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->db->where('username',$username)->where('password',sha1($password))->get('opd')->row_array();

		if($data){
			$resp = array(
				'status' => 'berhasil',
				'id' => $data['id'],
				'nama_opd' => $data['nama_opd'],
				'username' => $data['username'],
				'kepala' => $data['kepala'].'<br/>NIP. '.$data['nip'],
				'respon' => 'Berhasil Login'
			);
		}else{
			$resp = array(
				'status' => 'gagal',
				'respon' => 'username atau password salah'
			);
		}

		jsonku($resp);
	}

	function cek_usulan(){
		$id = $this->input->get('id');

		$laporan = count($this->db->where('disposisi',$id)->get('laporan')->result_array());

		$resp = array(
			'status' => 'berhasil',
			'total_laporan' => $laporan,
			'verif' => count($this->db->where('disposisi',$id)->where('status','1')->get('laporan')->result_array()),
			'tindak' => count($this->db->where('disposisi',$id)->where('status','2')->get('laporan')->result_array()),
			'selesai' => count($this->db->where('disposisi',$id)->where('status','3')->get('laporan')->result_array()),
		);

		jsonku($resp);
	}

	function detail_foto(){
		$data = $this->db->where('id_laporan',$this->input->get('id'))->order_by('nama_file','asc')->get('files')->result_array();
		jsonku($data);
	}

	function detail(){
		$laporan = $this->db->select('pelapor.nama_lengkap, pelapor.alamat, pelapor.no_hp, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.tgl_input, opd.nama_opd as disposisi, laporan.disposisi as id_opd')
			->from('laporan')
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->join('opd','opd.id=laporan.disposisi','left')
			->where('laporan.id',$this->input->get('id'))
			->get()->row_array();

		jsonku($laporan);
	}

	function data_akun(){
		$data = array();
		if ($this->input->get('kategori') == 'all') {
			$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->where('laporan.disposisi',$this->input->get('id_opd'))
			->get()->result_array();
		}else{
			$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
			->from('laporan')
			->join('kategori','kategori.id=laporan.kategori')
			->join('pelapor','pelapor.nik=laporan.nik')
			->where('status',$this->input->get('kategori'))
			->where('laporan.disposisi',$this->input->get('id_opd'))
			->get()->result_array();
		}
		
		foreach ($laporan as $l) {
			$photo='';
			if ($foto = $this->db->where('id_laporan',$l['id'])->get('files')->result_array()) {
				foreach ($foto as $f) {
					$photo .= $f['nama_file'].';';
				}
				$photo = substr($photo, 0, -1);
			}else{
				$photo = '-';
			}

			if ($l['status'] == '1') {
				$status = 'Terverifikasi';
			}else if ($l['status'] == '2') {
				$status = 'Ditindaklanjuti';
			}else{
				$status = 'Selesai';
			}

			if ($l['disposisi'] != '-') {
				$dispo = $this->db->where('id',$l['disposisi'])->get('opd')->row_array();
				$disposisi = $dispo['nama_opd'];
			}else{
				$disposisi = '-';
			}

			$data[] = array(
				'id' => $l['id'],
				'nama_lengkap' => $l['nama_lengkap'],
				'kategori' => $l['kategori'],
				'isi_laporan' => $l['isi_laporan'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($l['tgl_input'])), true).'. '.date('H.i', strtotime($l['tgl_input'])).' WIB',
				'lokasi_kejadian' => $l['lokasi_kejadian'],
				// 'jarak' => number_format((float)$jarak, 2, '.', '')." km",
				'jarak' => $l['latlng'],
				'disposisi' => $disposisi,
				'status_kode' => $l['status'],
				'status' => $status,
				'foto' => $photo
			);

		}

		jsonku($data);
	}

	function riwayat(){
		$data = array();
		
		$laporan = $this->db->select('pelapor.nama_lengkap, kategori.kategori, laporan.id, laporan.isi_laporan, laporan.lokasi_kejadian, laporan.latlng, laporan.status, laporan.disposisi, laporan.tgl_input')
		->from('laporan')
		->join('kategori','kategori.id=laporan.kategori')
		->join('pelapor','pelapor.nik=laporan.nik')
		->where('laporan.nik',$this->input->get('nik'))
		->get()->result_array();
		
		foreach ($laporan as $l) {
			$photo='';
			if ($foto = $this->db->where('id_laporan',$l['id'])->get('files')->result_array()) {
				foreach ($foto as $f) {
					$photo .= $f['nama_file'].';';
				}
				$photo = substr($photo, 0, -1);
			}else{
				$photo = '-';
			}

			if ($l['status'] == '1') {
				$status = 'Terverifikasi';
			}else if ($l['status'] == '2') {
				$status = 'Ditindaklanjuti';
			}else if ($l['status'] == '0') {
				$status = 'Belum Diverifikasi';
			}else{
				$status = 'Selesai';
			}

			if ($l['disposisi'] != '-') {
				$dispo = $this->db->where('id',$l['disposisi'])->get('opd')->row_array();
				$disposisi = $dispo['nama_opd'];
			}else{
				$disposisi = '-';
			}

			$data[] = array(
				'id' => $l['id'],
				'nama_lengkap' => $l['nama_lengkap'],
				'kategori' => $l['kategori'],
				'isi_laporan' => $l['isi_laporan'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($l['tgl_input'])), true).'. '.date('H.i', strtotime($l['tgl_input'])).' WIB',
				'lokasi_kejadian' => $l['lokasi_kejadian'],
				// 'jarak' => number_format((float)$jarak, 2, '.', '')." km",
				'jarak' => $l['latlng'],
				'disposisi' => $disposisi,
				'status_kode' => $l['status'],
				'status' => $status,
				'foto' => $photo
			);

		}

		jsonku($data);
	}

	function progress_laporan(){

		$progress = $this->db->select('*')
			->from('progress_laporan')
			->join('opd','opd.id=progress_laporan.id_opd')
			->where('id_laporan',$this->input->get('id_laporan'))
			->order_by('tgl_input','desc')
			->get()->result_array();

		$data = array();

		foreach ($progress as $p) {
			$data[] = array(
				'id_laporan' => $p['id_laporan'],
				'nama_opd' => $p['nama_opd'],
				'tindak_lanjut' => $p['tindak_lanjut'],
				'tanggal' => $p['tanggal'],
				'tgl_input' => tanggal_indo(date('Y-m-d', strtotime($p['tgl_input'])), true).', '.date('H.i', strtotime($p['tgl_input'])).' WIB',
				'foto' => $p['foto']
			);
		}

		jsonku($data);
	}

	function simpan_progress(){
		$data = $this->input->post();
		$data['tanggal'] = date('Y-m-d', strtotime($data['tanggal']));
		$data['tgl_input'] = date('Y-m-d');
		if ($data['status']=='Selesai') {
			$upd = array(
				'status' => '3'
			);
		}else{
			$upd = array(
				'status' => '2'
			);
		}

		$this->db->where('id',$data['id_laporan'])->update('laporan',$upd);
		$zxc = $this->db->select('nik')->from('laporan')->where('id',$resp['id'])->get()->row_array();

		push_notif($zxc['nik'],'Laporan '.$data['status'],$data['tindak_lanjut']);

		unset($data['status']);
		$this->db->insert('progress_laporan',$data);


		$resp = array(
			'respon' => 'Berhasil'
		);

		jsonku($resp);


	}

	function push_notif(){
		push_notif('1','asdzxc','asdasdkajsd');
	}

}