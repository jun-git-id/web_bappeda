<div class="page-content">
		<!--section slider-->
		<!-- <div class="section mt-0">
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
				<?php foreach ($carousel as $c): ?>
					<div class="slide">
						<div class="img--holder" style="width: 100%" data-bg="<?=base_url('assets/front/images/slideshow/testuit.jpg')?>"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<?=$c['keterangan']?>
										</div>
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
		</div> -->
		<!--//section under slider-->
		<!--section slider-->
		<div class="section mt-0">
			<div class="container">
			  <div>
			  	<BR/>
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			      <!-- Indicators -->
			      <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			      </ol>

			      <!-- deklarasi carousel -->
			      <div class="carousel-inner" role="listbox">
			      	 <div class="item active">
			          <img src="<?=base_url('assets/front/images/slideshow/test2.jpg')?>">
			          <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.3) ;">
			            <h3 style="color: white;">Bappeda Litbang Kab. Pekalongan</h3>
			            <p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p>
			          </div>
			        </div>
			      	<?php foreach ($carousel as $c): ?>
			        <div class="item">
			          <img src="<?=base_url('assets/front/images/slideshow/test3.jpg')?>">
			          <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.3) ;">
			            <h3 style="color: white;">Bappeda Litbang Kab. Pekalongan</h3>
			            <p><?=$c['keterangan']?></p>
			          </div>
			        </div>
			        <?php endforeach ?>

			       

			        <!-- <div class="item">
			          <img src="<?=base_url('assets/front/images/slideshow/test1.jpg')?>" alt="www.malasngoding.com">
			          <div class="carousel-caption">
			            <h3>Tutorial Android</h3>
			            <p>Tutorial membuat aplikasi android.</p>
			          </div>
			        </div> -->
			      </div>

			      <!-- membuat panah next dan previous -->
			      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
			    </div>
			  </div>

			</div>
		</div>
		<!--//section slider-->
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
				</div>
			</div>
		</div>
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
		<div class="section mt-4 mb-4">
			<div class="container px-0">
				<div class="row">
					<div class="col-3">
						<a href="http://smartcity.pekalongankab.go.id/eplannning" target="_blank"><img src="<?= base_url('/assets/front/images/eplanning.png') ?>" height="30px"></a>
					</div>
					<div class="col-3">
						<a href="http://smartcity.pekalongankab.go.id/simonev" target="_blank"><img src="<?= base_url('/assets/front/images/simonevx.png') ?>" height="30px"></a>
					</div>
					<div class="col-3">
						<div class="col-3">
						<a href="http://smartcity.pekalongankab.go.id/simonev" target="_blank"><img src="<?= base_url('/assets/front/images/lpse.png') ?>" height="50px"></a>
					</div>
					</div>
					<div class="col-3">
						<a href="http://smartcity.pekalongankab.go.id/simonev" target="_blank"><img src="<?= base_url('/assets/front/images/ppid.png') ?>" height="35px"></a>
					</div>
				</div>
			</div>
		</div>