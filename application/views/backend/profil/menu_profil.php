	<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        <i class="far fa-newspaper"></i> Data <span class="fw-300"><i>Berita</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <?= $this->session->flashdata('alert'); ?>
                        <a href="<?=base_url('admin/berita/tambah')?>" class="btn btn-primary"><i class="far fa-plus-hexagon"></i> Tambah Berita</a>
                        <hr>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                           <thead>
				            <tr>
				                <th>Nomor</th>
				                <th>ID</th>
				                <th>Nama Menu</th>
				                <th>Isi</th>
				                <th>Aksi</th>
				            </tr>
				            </thead>
				            <tbody>
				            	<?php $no = 1; foreach ($data_menu as $d): ?>
				            		<tr>
				            			<td><?=$no?></td>
				            			<td><?= $d['id'] ?></td>
				            			<td><?=$d['nama_menu']?></td>
				            			<td><?= $d['isi'] ?></td>
				            			<td>aksimu</td>
				            		</tr>
				            	<?php $no++; endforeach ?>
				            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nomor</th>
					                <th>ID</th>
					                <th>Nama Menu</th>
					                <th>Isi</th>
					                <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>