
			<div class="col-xl-3 col-md-12 col-sm-12 pl-xl-0">
				<div class="container-fluid">
					<div class="blog-isotope">
						<div class="blog-post" style="width: 100%">
							<h3>Berita Terbaru</h3>
							<?php 
								$terbaru = $this->db->select('bidang.*, posts.*')
										->from('posts')
										->join('bidang','bidang.id=posts.id_bidang')
										->where('status','1')
										// ->order_by('hit_count','desc')
										->order_by('tanggal','desc')
										->limit(3)
										->get()->result_array();
								$z = 0;
							    while ($z < count($terbaru)) {
						      		$resp = $this->db->where('id_post',$terbaru[$z]['id'])->limit(1)->get('thumbnail')->row_array();

						      		$terbaru[$z]['thumbnail'] = $resp['nama_file'];

						        	$z += 1;
							    }
							?>
							<div class="h-decor"></div>
							<?php $i=0; foreach ($terbaru as $t): ?>
							<div class="footer-post d-flex <?= ($i== 0) ? 'mt-0' : '' ?>">
								<div class="mr-1"><img src="<?=base_url('assets/images/posts/'.$t['thumbnail'])?>" alt="" class="img-fluid" width="60px"></div>
								<div class="footer-post-text">
									<div class="footer-post-title"><a href="<?=base_url('berita/detail/').$t['link']?>"><?=$t['judul']?></a></div>
									<p><i class="fas fa-history"></i> <?=tanggal_indo(date('Y-m-d', strtotime($t['tanggal'])), true)?></p>
								</div>
							</div>
							<?php $i++; endforeach ?>
							<h3 class="mt-4">Berita Terpopuler</h3>
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
									<div class="footer-post-title"><a href="<?=base_url('berita/detail/').$t['link']?>"><?=$t['judul']?></a></div>
									<p><i class="fas fa-history"></i> <?=tanggal_indo(date('Y-m-d', strtotime($t['tanggal'])), true)?></p>
								</div>
							</div>
							<?php $i++; endforeach ?>
							<h3 class="mt-4">Tags</h3>
							<div class="h-decor"></div>
							<ul class="tags-list mt-0">
							<?php 
								$tags =$this->db->get('tags')->result_array();
							?>
							<?php foreach ($tags as $t): ?>
								<li><a href="<?=base_url('berita/tags?t='.$t['tags'])?>"><?=$t['tags']?></a></li>
							<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
			</div>