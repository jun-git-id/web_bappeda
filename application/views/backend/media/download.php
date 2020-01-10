<main id="js-page-content" role="main" class="page-content">
    <div class="modal fade" id="modal-tambah" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="far fa-cloud-download"></i> Tambah Data Unduhan
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div class="js-summernote"></div> -->
                    <form method="post" action="<?=base_url('admin/download/save')?>" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea type="text" name="keterangan" class="form-control" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">File</label>
                            <input type="file" name="userFile" class="form-control" required="">
                            <input type="hidden" name="username" class="form-control" value="<?= $this->session->userdata('username') ?>">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i> Tutup</button>
                        <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-edit" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="far fa-edit"></i> Edit Data Unduhan
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div class="js-summernote"></div> -->
                    <form method="post" action="<?=base_url('admin/download/update')?>" enctype='multipart/form-data'>
                        <input type="hidden" name="xid" id="xid">
                        
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea type="text" name="keterangan" id="keterangan" class="form-control" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">File</label>
                            <input type="file" name="userFile" class="form-control">
                            <div class="help-block">Biarkan Kosong apabila tidak ingin mengupdate file</div>
                        </div>
                        <button type="button" class="btn btn-warning text-white" data-dismiss="modal"><i class="far fa-window-close"></i> Tutup</button>
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        <i class="far fa-cloud-download"></i> Data <span class="fw-300"><i>Unduhan</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Download merupakan menu yang digunakan untuk upload data/file yang diperbolehkan diakses oleh masyarakat luas (publik). Bisa berupa data maupun paparan yang digunakan rapat sehingga bisa didownload secara mudah. Jika file/ data berjumlah banyak mohon di ZIP/ Rar dulu sehingga data/file dapat dijadikan satu.
                        </div>
                        <?= $this->session->flashdata('alert'); ?>
                        <button data-toggle="modal" data-target="#modal-tambah" type="button" class="btn btn-info"><i class="far fa-plus-hexagon"></i> Tambah Data Unduhan</button>
                        <hr>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Input</th>
                                    <th>Nama File</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Unduhan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($data as $d): ?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$d['keterangan']?></td>
                                        <td><?=tanggal_indo(date('Y-m-d', strtotime($d['tgl_input']))).', '.date('H.i', strtotime($d['tgl_input'])).' WIB'?></td>
                                        <td><?=$d['nama_unduhan']?></td>
                                        <td><?= strtoupper($d['kategori']) ?></td>
                                        <td><?=$d['hit_count']?></td>
                                        <td>
                                            <a download href="<?=base_url('assets/download/').$d['nama_unduhan']?>" class="btn btn-primary btn-icon rounded-circle"><i class="far fa-cloud-download"></i></a>
                                            <a href="javascript:;" class="btn btn-secondary btn-icon rounded-circle" onclick="edit_unduhan('<?=$d['id']?>')"><i class="far fa-edit"></i></a>
                                            <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle del" rel="<?=base_url('admin/download/hapus/').$d['id']?>"><i class="far fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++; endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Input</th>
                                    <th>Nama File</th>
                                    <th>Jumlah Unduhan</th>
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