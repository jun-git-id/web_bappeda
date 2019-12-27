<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<?=$breadcumb?>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="row">
			<div class="col-8 px-0">
				<div class="container-fluid">
					<div class="text-center mb-2  mb-md-3 mb-lg-4">
						<h1>Blog Post Isotop</h1>
						<div class="h-decor"></div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="blog-isotope">
						<?php $i=1; foreach ($data as $p): ?>
						<div class="blog-post <?= ($i%2 != 0) ? 'mx-1' : '' ?>">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="<?=base_url('assets/front/images/')?>blog/blog-post-img-1.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html"><?=$p['judul']?></a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-social">
											<a href="#"><i class="icon-facebook-logo"></i></a>
											<a href="#"><i class="icon-twitter-logo"></i></a>
											<a href="#"><i class="icon-google-logo"></i></a>
											<a href="#"><i class="icon-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="post-teaser"><?=$p['readmore'];?></div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
						<?php $i++; endforeach ?>
						
						<div class="blog-post">
							<div class="post-image">
								<div class="slider-gallery post-carousel js-post-carousel">
									<a href="#"><img src="<?=base_url('assets/front/images/')?>blog/blog-post-img-2.jpg" alt=""></a>
									<a href="#"><img src="<?=base_url('assets/front/images/')?>blog/blog-post-img-2-1.jpg" alt=""></a>
									<a href="#"><img src="<?=base_url('assets/front/images/')?>blog/blog-post-img-2-2.jpg" alt=""></a>
								</div>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-social">
											<a href="#"><i class="icon-facebook-logo"></i></a>
											<a href="#"><i class="icon-twitter-logo"></i></a>
											<a href="#"><i class="icon-google-logo"></i></a>
											<a href="#"><i class="icon-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="post-teaser">Oral hygiene is essential for your overall wellbeing, not just your oral health. In fact, gum disease is a major risk factor for developing certain dangerous health conditions, such as diabetes and heart disease […]</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="clearfix"></div>
					<ul class="pagination justify-content-center">
						<?php 
						echo $this->pagination->create_links();
						?>
						<!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><span class="page-link">...</span></li>
						<li class="page-item"><a class="page-link" href="#">15</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-4">
				<div class="container-fluid">
					<div class="row">
						<form action="http://localhost/dindik/berita/pencarian" method="GET" class="content-search d-flex" style="width: 100% !important">
							<div class="input-wrap">
								<input type="text" class="form-control" placeholder="Pencarian" name="s">
							</div>
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>

							xxx
			</div>
			</div>
			
		</div>
	</div>