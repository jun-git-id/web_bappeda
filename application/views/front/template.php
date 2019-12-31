<?php $page = strtolower($this->uri->segment(1)); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta property="og:url"           content="<?=$og['url']?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?=$og['title']?>" />
	<meta property="og:description"   content="<?=$og['description']?>" />
	<meta property="og:image"         content="<?=$og['image']?>" />
	<meta name="<?=base_url('assets/front/form')?>at-detection" content="telephone=no">
	<title><?=$title?></title>
	<!-- Stylesheets -->
	<link href="<?=base_url('assets/front/vendor')?>/slick/slick.css" rel="stylesheet">
	<link href="<?=base_url('assets/front/vendor')?>/animate/animate.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/front/icons')?>/style.css" rel="stylesheet">
	<link href="<?=base_url('assets/front/vendor')?>/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="<?=base_url('assets/front/vendor')?>/fontawesome-pro/css/all.min.css" rel="stylesheet">
	<link href="<?=base_url('assets/front/css')?>/style.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="<?=base_url('assets/front/images')?>/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>

	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  var OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
	    OneSignal.init({
	      appId: "04e2cc56-7beb-4ba7-a823-0de0ba5ad667",
	    });
	  });
	</script>
</head>

<body class="shop-page">
	
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v5.0&appId=154933331965577&autoLogAppEvents=1"></script>
	<!--header-->
	<header class="header">
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:(0285)381456">(0285) 381456, (0285) 3801010</a></div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="gmail:bappedalitbang@pekalongankab.go.id">bappedalitbang@pekalongankab.go.id</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="https://www.facebook.com/bappeda.l.kabpkl/" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="https://twitter.com/bappedalitbang/" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="https://www.instagram.com/bappedalitbang_pekalongankab/" class="hovicon"><i class="icon-instagram-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index.html" class="header-logo"><img src="<?=base_url('assets/front/images')?>/logo.png" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item <?= ($page=='') ? 'active' : '' ?>">
											<a class="nav-link" href="<?=base_url()?>"><i class="fas fa-home"></i> BERANDA</a>
										</li>
										<li class="nav-item <?= ($page=='profil') ? 'active' : '' ?>">
											<a href="<?=base_url('profil')?>" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-warehouse-alt"></i> PROFIL</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="<?=base_url('profil/visi_misi')?>">Visi Misi</a></li>
												<li><a class="dropdown-item" href="<?=base_url('profil/latar_belakang')?>">Latar Belakang</a></li>
												<li><a class="dropdown-item" href="<?=base_url('profil/bagan_organisasi')?>">Bagan Organisasi</a></li>
											</ul>
										</li>
										<li class="nav-item <?= ($page=='berita') ? 'active' : '' ?>">
											<a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-th"></i> BERITA</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="<?=base_url('berita/k/semua')?>">Semua</a></li>
												<li><a class="dropdown-item" href="<?=base_url('berita/k/sekretariat')?>">Sekretariat</a></li>
												<li><a class="dropdown-item" href="<?=base_url('berita/k/program')?>">Program, Monitoring dan Evaluasi Pembangunan</a></li>
												<li><a class="dropdown-item" href="<?=base_url('berita/k/ekoinfra')?>">Ekonomi dan Infrastruktur</a></li>
												<li><a class="dropdown-item" href="<?=base_url('berita/k/litbang')?>">Penelitian dan Pengembangan</a></li>
												<li><a class="dropdown-item" href="<?=base_url('berita/k/pemsosbud')?>">Pemerintahan dan Sosial Budaya</a></li>
											</ul>
										</li>
										<li class="nav-item <?= ($page=='agenda') ? 'active' : '' ?>">
											<a class="nav-link" href="<?=base_url('agenda')?>"><i class="fas fa-calendar-week"></i> AGENDA</a>
										</li>
										<li class="nav-item <?= ($page=='informasi_publik') ? 'active' : '' ?>">
											<a href="our-specialist.html" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-person-sign"></i> INFORMASI PUBLIK</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="our-specialist.html">1</a></li>
												<li><a class="dropdown-item" href="doctor-page.html">2</a></li>
												<li><a class="dropdown-item" href="schedule.html">3</a></li>
											</ul>
										</li>
										<li class="nav-item <?= ($page=='media') ? 'active' : '' ?>">
											<a href="our-specialist.html" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-images"></i> MEDIA</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="<?=base_url('media/unduhan')?>">Unduhan</a></li>
												<li><a class="dropdown-item" href="<?=base_url('media/galeri')?>">Galeri</a></li>
											</ul>
										</li>										
										<li class="nav-item">
											<a class="nav-link" href="<?=base_url('kontak')?>"><i class="fas fa-phone-office"></i> KONTAK</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="<?=base_url('assets/front/form')?>-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>	
						</div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->
	<?=$content?>
	<!--footer-->
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
					<h3>Berita Terpopuler</h3>
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
					<?php $i++; endforeach ?>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Kontak Kami</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>Jl. Krakatau No. 9 Kajen, Pekalongan
							<br>
							<a href="<?=base_url('kontak')?>" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Lokasi Bappeda Litbang</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">(0285) 381010</span>, <span class="text-nowrap">(0285) 381456</span></span></b>
							</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:bappedalitbang@pekalongankab.go.id">bappedalitbang@pekalongankab.go.id</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">© 2019 <a href="javascript:;">Tim IT - Bappeda Litbang </a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="http://pekalongankab.go.id" target="_blank"><i class="fas fa-globe-asia"></i> Website Kabupaten Pekalongan</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">Nomor Telp.&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>(0285) 381010 / 381456</b></div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<!-- Vendors -->
	<script src="<?=base_url('assets/front/vendor')?>/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/cookie/jquery.cookie.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/bootstrap-datetimepicker/moment.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/popper/popper.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/bootstrap/bootstrap.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/waypoints/sticky.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/slick/slick.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/countTo/jquery.countTo.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/form-validation/jquery.form.js"></script>
	<script src="<?=base_url('assets/front/vendor')?>/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="<?=base_url('assets/front/js')?>/app.js"></script>
	<script src="<?=base_url('assets/front/js')?>/app-shop.js"></script>
	<script src="<?=base_url('assets/front/form')?>/forms.js"></script>
	<script type="text/javascript">
		$(function(){
			OneSignal.push(function() {

              OneSignal.getUserId(function(userId) {
                console.log("OneSignal User ID:", userId);
                $('#user_notif').val(userId);
              });
            })
		})
	</script>
	
</body>

</html>