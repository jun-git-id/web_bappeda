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
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/simonev.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/simonev.png') ?>"></div>
								<h3 class="service-box-title">SiMonev</h3>
								<p>Sistem Informasi Monitoring dan Evaluasi.</p>
								<div class="btn-wrap"><a href="https://e-bos.dindikbudkabpekalongan.com" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/comp.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/comp.png') ?>"></div>
								<h3 class="service-box-title">SIPPD</h3>
								<p>Sistem Informasi Perencanaan dan Pembangunan Daerah.</p>
								<div class="btn-wrap"><a href="https://e-pak.dindikkabpekalongan.com" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/simakba.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/simakba.png') ?>"></div>
								<h3 class="service-box-title">Simakba</h3>
								<p>Sistem Informasi Kelitbangan</p>
								<div class="btn-wrap"><a href="https://siprokol.dindikbudkabpekalongan.com/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/cloud.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/cloud.png') ?>"></div>
								<h3 class="service-box-title">Cloud Storage</h3>
								<p>Cloud Storage merupakan penyimpanan file berbasis cloud, dimana file-file tersebut akan tersimpan pada server bappeda.</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/comp.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/comp.png') ?>"></div>
								<h3 class="service-box-title">SiRatu</h3>
								<p>Sistem Informasi Surat Terpadu, sistem yang memanajemen surat di Bappeda Litbang sehingga lebih praktis serta paperless.</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/simonev.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/simonev.png') ?>"></div>
								<h3 class="service-box-title">E-Jurnal Kajen</h3>
								<p>E-jurnal adalah representasi elektronik sederhana dari jurnal-jurnal yang terdapat pada Bappeda Litbang.</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/sirangga.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/sirangga.png') ?>"></div>
								<h3 class="service-box-title">SiRangga</h3>
								<p>Sistem Informasi Perencanaan Anggaran.</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
									<div class="col-4">
						<div class="service-box service-box-whitebg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img height="80" src="<?= base_url('/assets/front/images/cloud.png') ?>"></div>
								<div class="service-box-icon-bg"><img height="200" src="<?= base_url('/assets/front/images/cloud.png') ?>"></div>
								<h3 class="service-box-title">SiPeka</h3>
								<p>Sistem Informasi Penjagaan Kenaikan.</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>		
				</div>
				<!-- <div class="row no-gutters services-box-wrap services-box-wrap-mobile">
					<div class="service-box-rotator js-service-box-rotator">
											<div class="service-box service-box-greybg service-box--hiddenbtn" onclick="window.open('https://e-bos.dindikbudkabpekalongan.com','_blank');">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce4b422909.jpg"></div>
								<div class="service-box-icon-bg"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce4b422909.jpg"></i></div>
								<h3 class="service-box-title">E-Jurnal Kajen</h3>
								<p>E-jurnal adalah representasi elektronik sederhana dari jurnal-jurnal yang terdapat pada Bappeda Litbang.</p>
								<div class="btn-wrap"><a href="https://e-bos.dindikbudkabpekalongan.com" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
											<div class="service-box service-box-greybg service-box--hiddenbtn" onclick="window.open('https://e-pak.dindikkabpekalongan.com','_blank');">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce58038d9a.jpg"></div>
								<div class="service-box-icon-bg"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce58038d9a.jpg"></i></div>
								<h3 class="service-box-title">E-Pak</h3>
								<p>The general surgical team encompasses a full range of emergency and elective inpatient and day case surgery</p>
								<div class="btn-wrap"><a href="https://e-pak.dindikkabpekalongan.com" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
											<div class="service-box service-box-greybg service-box--hiddenbtn" onclick="window.open('https://siprokol.dindikbudkabpekalongan.com/','_blank');">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce5ef5cca1.jpg"></div>
								<div class="service-box-icon-bg"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5d4ce5ef5cca1.jpg"></i></div>
								<h3 class="service-box-title">SIPROKOL</h3>
								<p>The general surgical team encompasses a full range of emergency and elective inpatient and day case surgery</p>
								<div class="btn-wrap"><a href="https://siprokol.dindikbudkabpekalongan.com/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
											<div class="service-box service-box-greybg service-box--hiddenbtn" onclick="window.open('http://kajen-rodo.dindikbud.pekalongankab.go.id/','_blank');">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5db6a4eea3fee.jpg"></div>
								<div class="service-box-icon-bg"><img src="http://dindikbud.pekalongankab.go.id/assets/images/aplikasi/5db6a4eea3fee.jpg"></i></div>
								<h3 class="service-box-title">Kajen Rodo</h3>
								<p>The general surgical team encompasses a full range of emergency and elective inpatient and day case surgery</p>
								<div class="btn-wrap"><a href="http://kajen-rodo.dindikbud.pekalongankab.go.id/" target="_blank" class="btn"><i class="icon-right-arrow"></i><span>Buka</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!--//section services-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">See the difference</div>
					<h2 class="h1">Why Choose Us?</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-medicine"></i></div>
							<div>
								<h5 class="icn-text-title">High Standard of surgery</h5>
								<p>Our surgeons are fellows of the most rigorous and academically recognized accreditation body for surgeons, and have completed accredited fellowship training with high standards of quality.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-team"></i></div>
							<div>
								<h5 class="icn-text-title">Committed Surgical Team</h5>
								<p>Our surgeons' expertise covers the broad scope of general, vascular and trauma surgery. This includes surgery of the breast, cancers, colon and rectum, endocrine system, and skin diseases.</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle icn-text-circle--sm"><i class="icon-syringe"></i></div>
							<div>
								<h5 class="icn-text-title">Modern Equipment</h5>
								<p>Our practice is equipped with the latest technology that allows us to perform the most modern treatments. We only use the premium brand products from the leading manufacturers.</p>
							</div>
						</div>
					</div>
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
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block">
						<img src="images/content/surgery-index-01.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-lg-6">
						<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
							<div class="h-sub">Welcome to our plastic surgeon clinic</div>
							<h2 class="h1">Meet <span class="theme-color">Dr. Anderson</span></h2>
						</div>
						<div class="row">
							<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto"><img src="images/content/surgery-index-01.jpg" alt="" class="img-fluid"></div>
							<div class="col-sm">
								<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
									<div class="h-sub">Welcome to our plastic surgeon clinic</div>
									<h2 class="h1">Meet <span class="theme-color">Dr. Anderson</span></h2>
								</div>
								<div class="text-left mt-3 mt-sm-0">
									<p class="p-lg">We are pleased that you have chosen to explore what we have to offer: aesthetic and reconstructive services that are provided by fellowship-trained plastic surgeons, in a safe and secure environment. Whether you desire minimally invasive facial rejuvenation or perforator flap breast reconstruction, we are committed to providing the highest quality experience, focusing on the unique needs of the plastic surgery patient.</p>
									<p>Plastic surgery provides evaluation and treatment for adult and pediatric patients who are candidates for reconstructive or aesthetic surgery</p>
									<div class="mt-0 mt-lg-2 mt-xl-4"><img src="images/content/signature.png" alt="" class="img-fluid"></div>
									<div class="mt-0 mt-lg-15 mt-xl-3"></div>
									<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a Visit<i class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section welcome-->
		<!--section services-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="title-wrap text-center">
					<h2 class="h1">General Services</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-desktop">
					<div class="col-4 order-1">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-man"></i></div>
									<div class="service-box-icon-bg"><i class="icon-man"></i></div>
									<h3 class="service-box-title">Male Plastic Surgery</h3>
									<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
									<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-injecting"></i></div>
									<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
									<h3 class="service-box-title">Non-Surgical Procedures</h3>
									<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
									<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8 order-2">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/service-02.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<h3 class="service-box-title">Facial Procedures</h3>
								<p>Our Clinic is board certified in facial plastic surgery and plastic surgery and specializes in facial cosmetic procedures.</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-8 order-3 order-lg-4 order-xl-3">
						<div class="service-box">
							<div class="service-box-image" data-bg="images/content/service-04.jpg"></div>
							<div class="service-box-caption text-center w-50 ml-auto">
								<h3 class="service-box-title">Breast Procedures</h3>
								<p>Cosmetic breast surgery can help you get the breast
									<br> shape & size you want</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-4 order-5">
						<div class="service-box-rotator js-service-box-rotator">
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-body"></i></div>
									<div class="service-box-icon-bg"><i class="icon-body"></i></div>
									<h3 class="service-box-title">Body Procedures</h3>
									<p>Body Procedures are dedicated to aesthetic and functional enhancement of your body</p>
									<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<div class="service-box service-box-greybg service-box--hiddenbtn">
								<div class="service-box-caption text-center">
									<div class="service-box-icon"><i class="icon-mommy"></i></div>
									<div class="service-box-icon-bg"><i class="icon-mommy"></i></div>
									<h3 class="service-box-title">Mommy Makeover</h3>
									<p>The goal of a mommy makeover is to restore the shape and appearance of a woman's body after childbearing.</p>
									<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters services-box-wrap services-box-wrap-mobile">
					<div class="service-box-rotator js-service-box-rotator">
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-man"></i></div>
								<div class="service-box-icon-bg"><i class="icon-man"></i></div>
								<h3 class="service-box-title">Male Plastic Surgery</h3>
								<p>Men of all ages and all walks of life are requesting plastic surgery for cosmetic reasons</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-injecting"></i></div>
								<div class="service-box-icon-bg"><i class="icon-injecting"></i></div>
								<h3 class="service-box-title">Non-Surgical Procedures</h3>
								<p>Aesthetic plastic surgery can achieve impressive changes. We offer a wide variety of non-surgical procedures</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-body"></i></div>
								<div class="service-box-icon-bg"><i class="icon-body"></i></div>
								<h3 class="service-box-title">Body Procedures</h3>
								<p>Body Procedures are dedicated to aesthetic and functional enhancement of your body</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
						<div class="service-box service-box-greybg service-box--hiddenbtn">
							<div class="service-box-caption text-center">
								<div class="service-box-icon"><i class="icon-mommy"></i></div>
								<div class="service-box-icon-bg"><i class="icon-mommy"></i></div>
								<h3 class="service-box-title">Mommy Makeover</h3>
								<p>The goal of a mommy makeover is to restore the shape and appearance of a woman's body after childbearing.</p>
								<div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--//section-->
		<!--section-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters flex-wrap flex-md-nowrap">
					<div class="col-md-7 col-lg-6">
						<div class="services-wrap1 float-right">
							<div class="service-tab-banner d-md-none">
								<img src="images/content/banner-right.jpg" alt="">
							</div>
							<div class="title-wrap text-center text-sm-left mt-2 mt-md-0">
								<h2 class="h1">Most <span class="theme-color">Popular Procedures</span></h2>
							</div>
							<p class="text-center text-sm-left">We are approach plastic surgery with precision and artistic vision to reveal each patient's unique beauty.</p>
							<div class="row">
								<div class="col-sm-6">
									<ul class="circle-list">
										<li>Breast Augmentation</li>
										<li>Breast Lift</li>
										<li>Liposuction</li>
										<li>Mommy Makeover</li>
										<li>Tummy Tuck</li>
										<li>Brazilian Butt Lift</li>
									</ul>
								</div>
								<div class="col-sm-6 mt-1 mt-md-0">
									<ul class="circle-list">
										<li>Eyelid surgery</li>
										<li>Facelift</li>
										<li>Neck Lift</li>
										<li>Rhinoplasty</li>
										<li>BOTOX® Cosmetic</li>
										<li>Injectables</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-6 service-tab-banner-alt d-none d-md-block align-items-center bg-cover bg-left" data-bg="images/content/banner-right.jpg">
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section achieved-->
		
		<!--//section achieved-->
		<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url(assets/front/images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="text-center text-md-left">
								<div class="title-wrap">
									<h2 class="h1">Patient <span class="theme-color">Information</span></h2>
								</div>
							</div>
							<div id="faqAccordion1" class="faq-accordion mt-2 mt-lg-3" data-children=".faq-item">
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>What is the difference between cosmetic and reconstructive surgery?</span></a>
									<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
										<div>
											<p>Cosmetic surgery is performed to reshape normal structures of the body in order to improve appearance and self-esteem. Cosmetic surgery is usually not covered by health insurance because it is elective.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>What is the recovery from cosmetic surgery like?</span></a>
									<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Where will my procedure be performed?</span></a>
									<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis.</p>
										</div>
									</div>
								</div>
								<div class="faq-item">
									<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>What are the possible risks?</span></a>
									<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
										<div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ipsum, voluptatum. Pariatur expedita facere fugit, doloribus reiciendis repellendus.</p>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask Question</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Our Succes Storeies</div>
					<h2 class="h1">Before and After Gallery</h2>
					<div class="h-decor"></div>
				</div>
				<div class="gallery-hover gallery-hover-carousel js-gallery-hover-carousel">
					<div>
						<div class="gallery-hover-item style-1">
							<div class="gallery-hover-item-before" data-bg="images/content/surgery-before-after-1-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Breast Augmentation
										</div>
										<p>Breast augmentation surgery increases or restores breast size using silicone gel implants, saline implants or in some cases, fat transfer.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Helen Armstrong</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/surgery-before-after-1-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Breast Augmentation
										</div>
										<p>Breast augmentation surgery increases or restores breast size using silicone gel implants, saline implants or in some cases, fat transfer.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Helen Armstrong</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="gallery-hover-item style-2">
							<div class="gallery-hover-item-before" data-bg="images/content/surgery-before-after-2-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Chin Lift
										</div>
										<p>A chin lift is a correctional procedure to remove wrinkled and sagging skin from the chin area.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Kimberly Jones</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/surgery-before-after-2-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Chin Lift
										</div>
										<p>A chin lift is a correctional procedure to remove wrinkled and sagging skin from the chin area.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Kimberly Jones</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="gallery-hover-item style-3">
							<div class="gallery-hover-item-before" data-bg="images/content/surgery-before-after-3-1.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Restriction
										</div>
										<p>surgery is used to physically limit the amount of food the stomach can hold, which limits the number of calories you can eat.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">Before</div>
										<div class="gallery-hover-item-name">Amanda Smith</div>
										<div class="d-none d-md-block">
											<table>
												<tr>
													<td>Scale wt.:</td>
													<td><b>165 lbs</b></td>
												</tr>
												<tr>
													<td>Body Fat:</td>
													<td><b>37.20</b></td>
												</tr>
												<tr>
													<td>Abdomen:</td>
													<td><b>33.6</b></td>
												</tr>
												<tr>
													<td>Fatmass:</td>
													<td><b>61.43</b></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="gallery-hover-item-after" data-bg="images/content/surgery-before-after-3-2.jpg">
								<div class="gallery-hover-item-txt1">
									<div>
										<div class="gallery-hover-item-title">
											Weight Loss
										</div>
										<p>Weight-loss (bariatric) surgery helps you lose weight and lowers your risk of medical problems associated with obesity.</p>
									</div>
								</div>
								<div class="gallery-hover-item-txt2">
									<div>
										<div class="gallery-hover-item-state">After</div>
										<div class="gallery-hover-item-name">Amanda Smith</div>
										<div class="d-none d-md-block">
											<table>
												<tr>
													<td>Scale wt.:</td>
													<td><b>110 lbs</b></td>
												</tr>
												<tr>
													<td>Body Fat:</td>
													<td><b>28.1</b></td>
												</tr>
												<tr>
													<td>Abdomen:</td>
													<td><b>29.2</b></td>
												</tr>
												<tr>
													<td>Fatmass:</td>
													<td><b>50.43</b></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section special offers-->
		<div class="section" id="specialOffer">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">For Our Dear Clients</div>
					<h2 class="h1">Special Offers</h2>
					<div class="h-decor"></div>
				</div>
				<div class="special-carousel js-special-carousel row">
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										$750<span>OFF</span>
									</div>
								</div>
								<img src="images/content/special-photo-01.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Love Yourself</div>
								<div class="special-card-txt2">Offer</div>
								<div class="special-card-txt3">Butt Lift or Tummy Tuck
									<br>or 360 Liposuction</div>
								<div><a href="schedule.html" class="btn"><i class="icon-right-arrow"></i><span>Schedule</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										10%<span>OFF</span>
									</div>
								</div>
								<img src="images/content/special-photo-02.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Breast</div>
								<div class="special-card-txt2">Augmentation</div>
								<div class="special-card-txt3">All inclusive include implants
									<br>and all fees for specific dates</div>
								<div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span>Contact now</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Whitening</div>
								<div class="special-card-txt2">Laser Teeth</div>
								<div class="special-card-txt3">
									Tooth whitening<br>and Home Bleaching</div>
								<div><a href="services.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Porcelain</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section special offers-->
		<!--section testimonials-->
		<div class="section bg-grey-dark py-0">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 col-lg-6 mt-2 mt-lg-0">
						<div class="reviews-wrap-alt ml-auto d-flex flex-column justify-content-center">
							<div class="title-wrap text-center text-md-right">
								<div class="h-sub">What People Says</div>
								<h2 class="h1">Patient <span class="theme-color">Testimonials</span></h2>
							</div>
							<div class="js-reviews-carousel reviews-carousel text-center text-md-right">
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
								<div class="review">
									<div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
									<p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
									<p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-6">
						<div class="reviews-author-carousel">
							<div>
								<div class="img-before"><img src="images/content/single-testimonials-author-1-2.jpg" alt=""><span>BEFORE</span></div>
								<div class="img-after"><img src="images/content/single-testimonials-author-1-1.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section testimonials-->
		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">From the Blog</h2>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
		<!--section-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center banner-center--p-sm bg-cover" style="background-image: url(assets/front/images/content/banner-center-02.jpg)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1">Trust Your Appearance to Us</div>
						<div class="banner-center-text4">Choose The Right Procedure For You</div>
						<a href="#" class="btn btn-white btn-hover-fill mt-2 mt-sm-3 mt-lg-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an appointment</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section call us-->
		<div class="section mt-5">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-sm-6 col-lg-7 d-flex align-items-center justify-content-center">
							<div class="text-center">
								<h2>Looking for <br class="d-lg-none"> a <span class="theme-color">Plastic Surgeon?</span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We're always accepting new patients! We believe in providing the best possible care to all our existing patients and welcome new patients to sample the service we have to offer. </p>
								<div class="mt-2 mt-lg-4">
									<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
								</div>
							</div>
						</div>
						<div class="col-sm-5 col-lg-5 col-xl-4 mt-3 mt-md-0">
							<img src="images/content/banner-callus.jpg" class="shift-right-1" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section call us-->
	</div>