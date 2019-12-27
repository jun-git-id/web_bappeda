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
                        <div class="panel-tag">
                            This example shows DataTables and the Responsive extension being used with the Bootstrap framework providing the styling. The DataTables / Bootstrap integration provides seamless integration for DataTables to be used in a Bootstrap page. <strong>Note</strong> that the <code>.dt-responsive</code> class is used to indicate to the extension that it should be enabled on this page, as responsive has special meaning in Bootstrap. The responsive option could also be used if required
                        </div>
                        <?= $this->session->flashdata('alert'); ?>
                        <a href="<?=base_url('admin/profil/tambah')?>" class="btn btn-primary"><i class="far fa-plus-hexagon"></i> Tambah Berita</a>
                        <hr>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                           <thead>
				            <tr>
				                <th width="6%">Nomor</th>
				                <th width="15%">Nama Menu</th>
				                <th width="65%">Isi</th>
				                <th width="14%">Aksi</th>
				            </tr>
				            </thead>
				            <tbody>
				            	<?php $no = 1; foreach ($data_menu as $d){ ?>
				            		<tr>
				            			<td><?=$no?></td>
				            			<td><?= $d['nama_menu'] ?></td>
				            			<?php 
				            				//hitung jumlah karakter
				            				$cek = strlen(strip_tags($d['isi']));
				            			 ?>
				            			<td> 
				            			<?php if ($cek > 350) { ?>
				            				<?= substr(strip_tags($d['isi']),0,350) ?> 
				            				<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal-detail">Read More...</button>

				            			    <div class="modal fade" id="modal-detail" role="dialog" aria-hidden="true">
									        <div class="modal-dialog modal-xl" role="document">
									            <div class="modal-content">
									                <div class="modal-header">
									                    <h4 class="modal-title">
									                        <i class="far fa-eye"></i> Detail Menu
									                    </h4>
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
									                    </button>
									                </div>
									                <div class="modal-body">
									                    <!-- <div class="js-summernote"></div> -->
									                    <form method="post" action="<?=base_url('admin/profil/update_latar_belakang')?>">
									                        <input type="hidden" name="xid" id="xid">
									                        <div class="form-group">
									                            <h3><?= $d['nama_menu'] ?></h3>
									                            <br/>
									                            <label style="font-size: 14px"><?= $d['isi']; ?></label>
									                        </div>
									                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i> Tutup</button>
									                        <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Perbarui</button>
									                    </form>
									                </div>
									            </div>
									        </div>
									    </div>

				            			<?php } else { ?>
				            				<?= strip_tags($d['isi'])?> 
				            			<?php } ?>
				            			</td>
				            			<td>
				            				<a href="<?=base_url('admin/profil/edit/').$d['id']?>" class="btn btn-secondary btn-icon rounded-circle"><i class="far fa-edit"></i></a>
                                            <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle del" rel="<?=base_url('admin/profil/hapus/').$d['id']?>"><i class="far fa-trash"></i></a>
				            			</td>
				            		</tr>
				            	<?php $no++; } ?>
				            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nomor</th>
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