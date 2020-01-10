<?php 
	function tanggal_indo($tanggal, $cetak_hari = false){
	  $hari = array ( 1 =>    'Senin',
	        'Selasa',
	        'Rabu',
	        'Kamis',
	        'Jumat',
	        'Sabtu',
	        'Minggu'
	      );
	      
	  $bulan = array (1 =>   'Januari',
	        'Februari',
	        'Maret',
	        'April',
	        'Mei',
	        'Juni',
	        'Juli',
	        'Agustus',
	        'September',
	        'Oktober',
	        'November',
	        'Desember'
	      );
	  $split    = explode('-', $tanggal);
	  $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	  
	  if ($cetak_hari) {
	    $num = date('N', strtotime($tanggal));
	    return $hari[$num] . ', ' . $tgl_indo;
	  }
	  return $tgl_indo;
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/dompdf/style.css')?>">
</head>
<body>
	<div class="out-border">
	<div class="out-border">
		<table width="100%">
			<!-- <tr>
				<td>
					<table>
						<tr>
							<td>
								<img src="C:\xampp\htdocs\siratu\assets\foto\kop_bappeda.png"  >
							</td>
						</tr>
					</table>
				</td>
			</tr> -->
			<tr>
				<td align="center" valign="middle" colspan="2" class="kop">PEMERINTAH KABUPATEN PEKALONGAN</td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="kop"><b>BADAN PERENCANAAN PEMBANGUNAN DAERAH</b></td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="kop"><b>DAN PENELITIAN DAN PENGEMBANGAN </b></td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="kop">Jl. Krakatau No. 9 Telp. (0285) 381456, 3801010 Fax. (0285) 381789 Kode Pos 51161</td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="kop">e-mail : bappeda_kabpkl@yahoo.com</td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="pad-bot"><b>K A J E N</b></td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="2" class="border-atas pad-bot"><b>LEMBAR DISPOSISI</b></td>
			</tr>
			<tr>
				<td idth="50%"  class="border-atas">
					<table width="100%">
						<tr>
							<td width="30%" valign="top" >Surat Dari</td>
							<td width="2%"  valign="center" >:</td>
							<td width="60%" valign="center" ><b><?= $data['pengirim']; ?></b></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%"  class="border-atas border-kiri">
					<table  width="100%">
						<tr>
							<td width="35%">Diterima Tanggal</td>
							<td width="2%">:</td>
							<td width="60%"><?= tanggal_indo(date("Y-m-d", strtotime($data['index_surat']))); ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="48%" class="border-atas">
					<table width="100%">
						<tr>
							<td width="30%">Nomor</td>
							<td width="2%">:</td>
							<td width="60%"><?= $data['no_surat'];?></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="52%" class="border-atas border-kiri">
					<table width="100%">
						<tr>
							<td width="35%">No Agenda</td>
							<td width="2%">:</td>
							<td width="60%"><?= $data['no_urut']; ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%" class="border-atas">
					<table width="100%">
						<tr>
							<td width="30%">Tanggal</td>
							<td width="2%">:</td>
							<td width="60%"><?= tanggal_indo(date("Y-m-d", strtotime($data['tgl_surat']))); ?></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%" class="border-atas border-kiri">
					<table width="100%">
						<tr>
							<td width="10%">Sifat</td>
							<td width="2%">:</td>
							<td>
								<table width="100%">
									<tr>
										<td width="40%"><?= ($data['sifat']=='Sangat Segera') ? "<b><s>a</s></b>" : "a" ?>. Sangat Segera</td>
										<td width="25%"><?= ($data['sifat']=='Segera') ? "<b><s>b</s></b>" : "b" ?>. Segera</td>
										<td width="35%"><?= ($data['sifat']=='Rahasia') ? "<b><s>c</s></b>" : "c" ?>. Rahasia</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" valign="center"  class="border-atas pad-top pad-bot">
					<table width="100%">
						<tr>
							<td width="11.5%" valign="top">Perihal</td>
							<td width="1%" valign="top">:</td>
							<td width="60%" align="justify"><b><?= $data['isi']; ?></b></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%" class="border-atas border-bawah">
					<table width="100%">
						<tr>
							<td width="30%">Diteruskan Kepada</td>
							<td width="2%">:</td>
							<td width="48%"></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%" class="border-atas border-bawah">
					<table width="100%">
						<tr>
							<td width="40%">Dengan Hormat Harap</td>
							<td width="2%"">:</td>
							<td width="48%"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%" class="pad-top">
					<table width="100%">
						<tr>
							<td width="10%"><input type="checkbox" name="sekretaris" <?= ($data['sekretaris']=='on') ? 'checked=""' : "" ?>></td>
							<td>SEKRETARIS</td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%" class="pad-top">
					<table width="100%">
						<tr>
							<td width="8%"><input type="checkbox" name="catat" <?= ($data['catat']=='on') ? 'checked=""' : "" ?>></td>
							<td width="42%">Catat &amp; Ingatkan</td>
							<td width="8%"><input type="checkbox" name="pedomani" <?= ($data['pedomani']=='on') ? 'checked=""' : "" ?>></td>
							<td>Pedomani</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="10%"><input type="checkbox" name="litbang" <?= ($data['litbang']=='on') ? 'checked=""' : "" ?>></td>
							<td>Kabid. Litbang</td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="8%"><input type="checkbox" name="hadiri" <?= ($data['hadiri']=='on') ? 'checked=""' : "" ?>></td>
							<td width="42%">Hadiri &amp; Perintahkan</td>
							<td width="8%"><input type="checkbox" name="pertimbangkan" <?= ($data['pertimbangkan']=='on') ? 'checked=""' : "" ?>></td>
							<td>Pertimbangkan</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="10%"><input type="checkbox" name="ekonomi" <?= ($data['ekonomi']=='on') ? 'checked=""' : "" ?>></td>
							<td>Kabid. Ekonomi dan Infrastruktur</td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="8%"><input type="checkbox" name="siapkan" <?= ($data['siapkan']=='on') ? 'checked=""' : "" ?>></td>
							<td>Siapkan Bahan</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="10%"><input type="checkbox" name="program" <?= ($data['program']=='on') ? 'checked=""' : "" ?>></td>
							<td>Kabid. Program dan Monev</td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td width="8%"><input type="checkbox" name="koordinasi" <?= ($data['koordinasi']=='on') ? 'checked=""' : "" ?>></td>
							<td colspan="2">Koordinasikan &amp; Tindak Lanjuti</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="center" width="50%" class="pad-bot">
					<table width="100%">
						<tr>
							<td width="10%"><input type="checkbox" name="pemsosbud" <?= ($data['pemsosbud']=='on') ? 'checked=""' : "" ?>></td>
							<td>Kabid. Pemsosbud</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%" class="pad-bot" style="padding-bottom: 7px">
					<table width="100%">
						<tr>
							<td width="8%"><input type="checkbox" name="kaji" <?= ($data['kaji']=='on') ? 'checked=""' : "" ?>></td>
							<td>Kaji, Tanggapan &amp; Saran</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="border-kiri">
				<td valign="center" width="50%" class="border-atas">
					<table width="100%">
						<tr>
							<td width="10%"><b>Catatan</b></td>
							<td width="2%">:</td>
							<td width="60%"></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%" class="border-atas">
					<table width="100%">
						<tr>
							 <td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="border-kiri">
				<td valign="center" width="50%">
					<table width="50%">
						<tr>
							<td width="50%"><?= $data['catatan'];?></td>
						</tr>
					</table>
				</td>
				<td valign="center" width="50%">
					<table width="100%">
						<tr>
							<td align="center" class="kop">KEPALA BAPPEDA LITBANG</td>
						</tr>
						<tr>
							<td align="center">KABUPATEN PEKALONGAN</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td align="center" class="kop"><b>Ir. BAMBANG IRIANTO, M.Si</b></td>
						</tr>
						<tr>
							<td align="center" style="padding-bottom: 5px">NIP. 19620227 198303 1 007</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
<script type="text/javascript">
	// window.print();
	this.print(true);
</script>
</html>