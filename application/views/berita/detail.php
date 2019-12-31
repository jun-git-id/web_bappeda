	<div class="page-content animated fadeIn">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<span class="theme-color"><?=$breadcumb?></span>
					</div>
				</div>
			</div>

		</div>
		<!--//section-->
		<!--section-->
		<div class="section page-content-first mt-4">
			<div class="container-fluid">
				<div class="row">
					<div class="container-fluid mb-4">
					<form action="http://localhost/dindik/berita/pencarian" method="GET" class="content-search d-flex" style="width: 100% !important">
						<div class="input-wrap">
							<input type="text" class="form-control" placeholder="Cari Berita..." name="s">
						</div>
						<button type="submit"><i class="icon-search"></i></button>
					</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xl-9 col-sm-12 px-xl-0 px-md-2 px-sm-2 pl-xl-4">
						<div class="blog-posts pr-xl-2" id="blog-posts">
							<div class="blog-post">
								<div class="blog-post-info">
									<div>
										<h2 class="post-title"><a href="<?=base_url('berita/detail/').$p['link']?>"><?=$p['judul']?></a></h2>
										<div class="post-meta">
											<div class="post-meta-author"><i class="fa fa-user"></i> <?=$p['nama_bidang']?> |</div>
											<div class="post-meta-social">
												<i class="icon icon-calendar"></i><?=tanggal_indo(date('Y-m-d', strtotime($p['tanggal']))).', '.date('H.i',strtotime($p['tanggal'])).' WIB'?>
												<div class="float-right">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="post-image">
									<?php if (count($p['thumbnail']) > 1) { ?>
										<div class="slider-gallery post-carousel js-post-carousel">
											<?php foreach ($p['thumbnail'] as $t): ?>
												<a href="<?=base_url('assets/images/posts/'.$t['nama_file'])?>"><img src="<?=base_url('assets/images/posts/'.$t['nama_file'])?>" alt=""></a>	
											<?php endforeach ?>
										</div>
									<?php } else { ?>
										<?php foreach ($p['thumbnail'] as $t): ?>
											<a href="<?=base_url('assets/images/posts/'.$t['nama_file'])?>"><img src="<?=base_url('assets/images/posts/'.$t['nama_file'])?>" alt=""></a>
										<?php endforeach ?>
									<?php } ?>
								</div>
								<div class="post-text mt-2"><?=$p['isi']?></div>
								<?php if (count($p['attachment']) > 0): ?>
								<div class="row">
									<div class="col-12">
										<p class="mb-0">Attachments :</p>
										<ol>
											<?php foreach ($p['attachment'] as $a): ?>
												<li><a href="<?=base_url('assets/attachments/').$a['nama_file']?>"><?=$a['nama_file']?></a></li>
											<?php endforeach ?>
										</ol>
									</div>
								</div>	
								<?php endif ?>
								<?php if (isset($p['tags'])): ?>
									
									<ul class="tags-list">
										<p class="mb-0">Tags :</p>
										<?php $x = explode(";", $p['tags']) ?>
										<?php foreach ($x as $d): ?>
											<li><a href="<?=base_url('berita/tags?t=').$d?>"><?=$d?></a></li>
										<?php endforeach ?>
									</ul>
									
								<?php endif ?>
							</div>
						</div>
						<div class="row ml-1 mt-1">
							<div class="fb-share-button" data-href="<?=base_url('berita/detail/'.$p['link'])?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
							&nbsp;
							<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div class="comments-block mt-3 mt-lg-6">
							<h3>Komentar</h3>
							<?php foreach ($komentar as $k): ?>
							<div class="comment mt-0">
								<div class="text">
									<div class="meta"><a href="javascript:;" class="meta-author"><b><?=$k['nama']?></b></a><span class="meta-date"><i class="icon icon-clock3"></i><?=tanggal_indo(date('Y-m-d', strtotime($k['tgl_komen'])), true)?></span></div>
									<p><?=$k['komentar']?></p>
								</div>
							</div>
							<?php $balasan = $this->db->select('bidang.*, user.*, balasan.*')
							->from('balasan')
							->join('user','balasan.username=user.username')
							->join('bidang','bidang.id=user.id_bidang')
							->where('id_komentar',$k['id'])
							->get()->row_array(); ?>
							<?php if (isset($balasan)): ?>
							<div class="comment ml-4 pl-4 mt-1">
								<div class="text">
									<div class="meta"><a href="javascript:;" class="meta-author"><b><?=$balasan['nama_bidang']?></b></a><span class="meta-date"><i class="icon icon-clock3"></i><?=tanggal_indo(date('Y-m-d', strtotime($balasan['tgl_balas'])), true)?></span></div>
									<p><?=$balasan['balasan']?></p>
								</div>
							</div>
							<?php endif ?>
							
							<hr class="my-2">
							<?php endforeach ?>
							
							<!-- <div class="comment">
								<div class="userpic d-none d-sm-block"><span class="icon icon-user"></span></div>
								<div class="text">
									<div class="meta"><a href="#" class="meta-author"><b>Admin</b></a><span class="meta-date"><i class="icon icon-clock3"></i>17 Jan, 2018</span></div>
									<p>Make sure to replace your toothbrush every three months or when it begins to show wear, whichever comes first. </p>
									<a href="#" class="reply"><i class="icon-reply-black"></i>Reply</a>
								</div>
							</div> -->
						</div>
						<div class="clearfix mt-3 mt-lg-4"></div>
						<h3>Tinggalkan Komentar</h3>
						<p>Email anda tidak akan dipublikasikan, kolom bertanda * wajib untuk diisi</p>
						<form class="contact-form mt-2 pb-0" method="post" novalidate="novalidate" action="<?=base_url('berita/komen')?>">
							<input type="hidden" name="id_post" value="<?=$p['id']?>">
							<input type="hidden" name="link" value="<?=$p['link']?>">
							<div class="mt-0 row">
								<div class="col-md-8">
									<label>Nama Anda*</label>
									<input type="text" class="form-control" name="nama" required="">
								</div>
							</div>
							<div class="mt-15 row">
								<div class="col-md-8">
									<label>Email*</label>
									<input type="email" class="form-control" name="email" required="">
								</div>
							</div>
							<div class="mt-15 row">
								<div class="col-md-10">
									<label>Komentar*</label>
									<textarea class="form-control" name="komentar" required=""></textarea>
								</div>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-primary"><i class="icon-right-arrow"></i><span>Tinggalkan Komentar</span><i class="icon-right-arrow"></i></button>
							</div>
						</form>
					</div>
					<?=$side_blog?>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>