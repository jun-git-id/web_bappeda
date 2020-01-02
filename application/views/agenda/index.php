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
							<div class="table-responsive" style="margin :20px">
						        <table id="dt-basic-example" class="table table-hover" cellspacing="0">
						            <thead>
						            <tr>
						                <th>Nomor</th>
						                <th>Acara</th>
						                <th>Tanggal</th>
						                <th>Ruang Rapat</th>
						                <th>Jam</th>
						                <th>Penanggungjawab</th>
						                <th>Kontak</th>
						            </tr>
						            </thead>
						            <tbody>
						            	<?php foreach ($data_siratu as $s){ ?>
						            		<td><?= $s->nomor; ?></td>
						            		<td><?= $s->acara; ?></td>
						            		<td><?= tanggal_indo($s->tanggal); ?></td>
						            		<td><?= $s->ruang; ?></td>
						            		<td><?= $s->jam; ?></td>
						            		<td><?= $s->penanggungjawab; ?></td>
						            		<td><?= $s->contact; ?></td>
						            	<?php } ?>

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