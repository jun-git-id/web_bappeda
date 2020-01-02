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
						            			<!-- <td><?=$d['nama_unduhan']?></td> -->
						            			<td><?=$d['hit_count']?></td>
						            			<td><a download="" href="<?=base_url('assets/info_pubik/').$d['file']?>" class="btn btn-xs btn-gradient" onclick="tambah_dl('<?=$d['id_info']?>')"><i class="far fa-cloud-download"></i> Download</a></td>
						            		</tr>
						            	<?php $no++; endforeach ?>
						            </tbody>
						        </table>
					        </div>
						</div>
						<div class="clearfix"></div>
					</div>
					
		<!--//section-->
		<!--section-->
						</div>
					</div>
				</div>
			</div>
			<?=$side_blog;?>
		</div>
	</div>