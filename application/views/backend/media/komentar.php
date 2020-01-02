<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        <i class="far fa-table"></i> Data <span class="fw-300"><i>komentar</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            This example shows DataTables and the Responsive extension being used with the Bootstrap framework providing the styling. The DataTables / Bootstrap integration provides seamless integration for DataTables to be used in a Bootstrap page. <strong>Note</strong> that the <code>.dt-responsive</code> class is used to indicate to the extension that it should be enabled on this page, as responsive has special meaning in Bootstrap. The responsive option could also be used if required
                        </div>
                        <?= $this->session->flashdata('alert'); ?>
                        <hr>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Komentar</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($data as $d): ?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$d['nama']?></td>
                                        <td><?=$d['email']?></td>
                                        <td><?=nl2br($d['komentar'])?></td>
                                        <td>
                                            <?php if ($d['status']== '0') : ?>
                                               <h3><span class="badge badge-danger">disembunyikan</span></h3>
                                            <?php endif ?>
                                            <?php if ($d['status']== '1') : ?>
                                                <h3><span class="badge badge-info">ditampilkan</span></h3>
                                            <?php endif ?>
                                            <?php if ($d['status']== '2') : ?>
                                                <h3><span class="badge badge-success">dibalas</span></h3>
                                            <?php endif ?>
                                        </td>
                                        <td>
                                            <?php if ($d['status']== '0') : ?>
                                               <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle del" rel="<?=base_url('admin/komentar/hapus/').$d['id']?>"><i class="far fa-trash"></i></a>
                                               <a href="javascript:;" class="btn btn-success btn-icon rounded-circle tampilkan" rel="<?=base_url('admin/komentar/tampilkan/').$d['id']?>"><i class="far fa-eye"></i></a>
                                               <a href="javascript:;" class="btn btn-info btn-icon rounded-circle balas_kom" data-email="<?= $d['email'] ?>" data-id="<?= $d['id'] ?>" rel="<?=base_url('admin/komentar/balas/').$d['id']?>"><i class="far fa-comments"></i></a>
                                            <?php endif ?>
                                            <?php if ($d['status']== '1') : ?>
                                               <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle del" rel="<?=base_url('admin/komentar/hapus/').$d['id']?>"><i class="far fa-trash"></i></a>
                                               <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle sembunyikan" rel="<?=base_url('admin/komentar/sembunyikan/').$d['id']?>"><i class="far fa-eye-slash"></i></a>
                                               <a href="javascript:;" class="btn btn-info btn-icon rounded-circle balas_kom" data-email="<?= $d['email'] ?>" data-id="<?= $d['id'] ?>" rel="<?=base_url('admin/komentar/balas/').$d['id']?>"><i class="far fa-comments"></i></a>
                                            <?php endif ?>
                                            <?php if ($d['status']== '2') : ?>
                                               <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle del" rel="<?=base_url('admin/komentar/hapus/').$d['id']?>"><i class="far fa-trash"></i></a>
                                               <a href="javascript:;" class="btn btn-danger btn-icon rounded-circle sembunyikan" rel="<?=base_url('admin/komentar/sembunyikan/').$d['id']?>"><i class="far fa-eye-slash"></i></a>
                                               <a href="javascript:;" class="btn btn-info btn-icon rounded-circle balas_kom" data-email="<?= $d['email'] ?>" data-id="<?= $d['id'] ?>" rel="<?=base_url('admin/komentar/balas/').$d['id']?>"><i class="far fa-comments"></i></a>
                                            <?php endif ?>
                                            
                                        </td>
                                    </tr>
                                <?php $no++; endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>komentar</th>
                                    <th>Status</th>
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


<div class="modal fade" id="modal-balas" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="far fa-edit"></i>Balas Komentar
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form method="post" id="form" enctype="multipart/form-data" action="javascript:kirim_pesan()"> -->
                <form method="post"  enctype="multipart/form-data" action="<?= base_url('index.php/admin/komentar/balas')?>">
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" required="" readonly="">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="balasan" class=" form-control" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" id="id" name="id_komentar" class="form-control" required="">
                        <input type="text" id="username" name="username" class="form-control" required="" value="<?= $this->session->userdata('username') ?>">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="far fa-window-close"></i> Tutup</button>
                    <button type="submit" class="btn btn-info"><i class="far fa-arrow-alt-up"></i>Balas Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>