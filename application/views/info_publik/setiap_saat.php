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
			<div class="col-lg-9 aside">
				<div class="container">
					<div class="blog-isotope">
						<div class="blog-posts animated fadeIn" id="blog-posts">
							<div class="container">
								<div class="text-center mb-2  mb-md-3 mb-lg-4">
									<div class="h-sub theme-color">Agenda Ruang Rapat <br>Bappeda Litbang Kabupaten Pekalongan</div>
									<div class="h-decor"></div>
								</div>
							</div>
							<div class="table-responsive">
						        <table id="example" class="table table-hover dt-responsive display nowrap" cellspacing="0">
						            <thead>
						            <tr>
						                <th>Nomor</th>
						                <th>Keterangan</th>
						                <th>Tanggal Upload</th>
						                <th>Kategori</th>
						                <!-- <th>Nama File</th> -->
						                <th>Jumlah Unduhan</th>
						                <th>Aksi</th>
						            </tr>
						            </thead>
						            <tbody>
						            	<?php $no = 1; foreach ($data as $d): ?>
						            		<tr>
						            			<td><?=$no?></td>
						            			<td><?=nl2br($d['keterangan'])?></td>
						            			<td><?=tanggal_indo(date('Y-m-d', strtotime($d['tgl_input']))).', '.date('H.i', strtotime($d['tgl_input'])).' WIB'?></td>
						            			<td><?=$d['kategori']?></td>
						            			<td><?=$d['hit_count']?></td>
						            			<td><a href="<?=base_url('assets/info_publik/').$d['file']?>" class="btn btn-xs btn-gradient" onclick="tambah_hit_info('<?=$d['id_info']?>')"><i class="far fa-cloud-download"></i> Download</a></td>
						            		</tr>
						            	<?php $no++; endforeach ?>
						             </tbody>
						        </table>
					        </div>
						</div>
					</div>
				</div>
			</div>
			<?=$side_blog;?>
		</div>
	</div>
