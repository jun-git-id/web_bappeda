<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				<?php foreach ($carousel as $c): ?>
					<div class="slide">
						<div class="img--holder" data-bg="<?=base_url('assets/front/images/slideshow/').$c['foto']?>"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<!-- <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<?=$c['keterangan']?>
										</div> -->
										<div class="slide-btn">
											<a target="_blank" href="<?=$c['link']?>" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				</div>
			</div>
		</div>
		<!--//section under slider-->
		<!--section services-->
		<div class="section mt-4 mb-4">
			<div class="container px-0">
				<div class="title-wrap text-center">
					<div class="h1"></div>
					<h1>APLIKASI <strong style="color : #0CB3FA">BAPPEDA LITBANG KAB. PEKALONGAN</strong></h1>
					<div class="h-decor"></div>
					<h2 class="h-sub theme-color">Saat ini setiap elemen dituntut untuk bisa berinovasi dalam upaya peningkatan kualitas aparatur pemerintah. Salah satu inovasi yang telah dilakukan Bappeda Litbang Kabupaten Pekalongan 
						adalah dengan memanfaatkan teknologi guna meningkatkan efektifitas pekerjaan. Berikut ini adalah berbagai inovasi yang sudah dilakukan sebagai wujud kreatifitas anak bangsa dalam upaya berpartisipasi membangun negeri.</h2>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-desktop">
				<?php foreach ($aplikasi as $a): ?>
					<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="60" src="<?=base_url('assets/images/aplikasi/').$a['foto']?>"></div>
								<div class="service-box-icon-bg"><img height="180" src="<?=base_url('assets/images/aplikasi/').$a['foto']?>"></div>
								<h3 class="service-box-title"><?=$a['nama_aplikasi']?></h3>
								<p><?=$a['keterangan']?></p>
								<div class="btn-wrap"><a href="<?=$a['link']?>" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<?php endforeach ?>	
		<!--//section slider-->
		<!--section welcome-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h1"></div>
					<h1>TENTANG <strong style="color : #0CB3FA">BAPPEDA LITBANG KAB. PEKALONGAN</strong></h1>
					<div class="h-decor"></div>
					<h2 class="h-sub theme-color">Badan Perencanaan Pembangunan Daerah dan Penelitian Dan Pengembangan Kabupaten Pekalongan dibentuk berdasarkan Peraturan Daerah Kabupaten Pekalongan Nomor 4 Tahun 2016 tentang 
						Pembentukan dan Susunan Perangkat Daerah Kabupaten Pekalongan (Lembaran Daerah Kabupaten Pekalongan Tahun 2016 Nomor 4).</h2>
					<h2></h2>
				</div>
				<div class="row d-block js-counter-carousel">
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-image"><img src="<?= base_url('/assets/front/images/Profil/1.jpg') ?>"></div>
							<div class="decor"></div>
							<div class="counter-box-text" style="color : #0CB3FA">M. YULIAN AKBAR, S.Sos, M.Si</div>
							<div class="counter-box-text">PLT</div>
							<h2></h2>
							<div class="counter-box-text">NIP. 19750710 199903 1 008</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-image"><img src="<?= base_url('/assets/front/images/Profil/2.jpg') ?>"></div>
							<div class="decor"></div>
							<div class="counter-box-text" style="color : #0CB3FA">YUDHI HIMAWAN, ST, M.Sc, MT</div>
							<div class="counter-box-text">KABID EKONOMI DAN INFRASTRUKTUR</div>
							<h2></h2>
							<div class="counter-box-text">NIP. 19790511 200502 1 003</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-image"><img src="<?= base_url('/assets/front/images/Profil/3.jpg') ?>"></div>
							<div class="decor"></div>
							<div class="counter-box-text" style="color : #0CB3FA">FERY IRAWAN, ST, MT</div>
							<div class="counter-box-text">KABID PROGRAM, MONITORING DAN EVALUASI PEMBANGUNAN</div>
							<h2></h2>
							<div class="counter-box-text">NIP. 19780308 199703 1 002</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-image"><img src="<?= base_url('/assets/front/images/Profil/4.jpg') ?>"></div>
							<div class="decor"></div>
							<div class="counter-box-text" style="color : #0CB3FA">IKHLAS ANANDA, SH, M.Si</div>
							<div class="counter-box-text">KABID PENELITIAN DAN PENGEMBANGAN</div>
							<h2></h2>
							<div class="counter-box-text">NIP. 19660811 199301 1 001</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-image"><img src="<?= base_url('/assets/front/images/Profil/5.jpg') ?>"></div>
							<div class="decor"></div>
							<div class="counter-box-text" style="color : #0CB3FA">DIDIN NASRUDDIN, SH, M.Si</div>
							<div class="counter-box-text">KABID PEMERINTAHAN DAN SOSIAL BUDAYA</div>
							<h2></h2>
							<div class="counter-box-text">NIP. 19751011 199603 1 001</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		<!--section welcome-->
		<div class="footer mt-2">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img src="<?=base_url('assets/front/images')?>/footer-logo.png" alt="" class="img-fluid">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-lg-none">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">
							<div class="footer-text mt-1 mt-lg-2">
								<p>Untuk mendapatkan Berita Terbaru,
									<br>Subscribe email anda dibawah ini</p>
								<form action="#" class="footer-subscribe">
									<div class="input-group">
										<input name="subscribe_mail" type="text" class="<?=base_url('assets/front/form')?>-control" placeholder="Your Email" />
										<span><i class="icon-black-envelope"></i></span>
									</div>
								</form>
							</div>
							<div class="footer-social d-none d-lg-block">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://twitter.com/bappedalitbang/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/bappedalitbang_pekalongankab/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<!-- <h3>Berita Terpopuler</h3>
					<?php 
						$terpopuler = $this->db->select('bidang.*, posts.*')
								->from('posts')
								->join('bidang','bidang.id=posts.id_bidang')
								->where('status','1')
								->order_by('hit_count','desc')
								->order_by('tanggal','desc')
								->limit(3)
								->get()->result_array();
						$z = 0;
					    while ($z < count($terpopuler)) {
				      		$resp = $this->db->where('id_post',$terpopuler[$z]['id'])->limit(1)->get('thumbnail')->row_array();

				      		$terpopuler[$z]['thumbnail'] = $resp['nama_file'];

				        	$z += 1;
					    }
					?>
					<div class="h-decor"></div>
					<?php $i=0; foreach ($terpopuler as $t): ?>
					<div class="footer-post d-flex <?= ($i== 0) ? 'mt-0' : '' ?>">
						<div class="mr-1"><img src="<?=base_url('assets/images/posts/'.$t['thumbnail'])?>" alt="" class="img-fluid" width="60px"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="#"><?=$t['judul']?></a></div>
							<p><i class="fas fa-history"></i> <?=tanggal_indo(date('Y-m-d', strtotime($t['tanggal'])), true)?></p>
						</div>
					</div>
					<?php $i++; endforeach ?> -->
				</div>
				<div class="col-sm-6 col-lg-4">
					<!-- <h3>Kontak Kami</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>Jl. Krakatau No. 9 Kajen, Pekalongan
							<br>
							<a href="<?=base_url('kontak')?>" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Lokasi Bappeda Litbang</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">(0285) 381010</span>, <span class="text-nowrap">(0285) 381456</span></span></b>
							</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:bappedalitbang@pekalongankab.go.id">bappedalitbang@pekalongankab.go.id</a></li>
					</ul> -->
				</div>
			</div>
		</div>
	</div>