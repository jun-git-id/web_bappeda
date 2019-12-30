<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <?= '<center><div id="loadering" class="lds-css ng-scope animated fadeIn"><div style="width:100%;height:100%" class="lds-facebook"><div></div><div></div><div></div></div><style type="text/css">@keyframes lds-facebook_1{0%{top: 36px; height: 128px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}@-webkit-keyframes lds-facebook_1{0%{top: 36px; height: 128px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}@keyframes lds-facebook_2{0%{top: 41.99999999999999px; height: 116.00000000000001px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}@-webkit-keyframes lds-facebook_2{0%{top: 41.99999999999999px; height: 116.00000000000001px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}@keyframes lds-facebook_3{0%{top: 48px; height: 104px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}@-webkit-keyframes lds-facebook_3{0%{top: 48px; height: 104px;}50%{top: 60px; height: 80px;}100%{top: 60px; height: 80px;}}.lds-facebook{position: relative;}.lds-facebook div{position: absolute; width: 30px;}.lds-facebook div:nth-child(1){left: 35px; background: #1d3f72; -webkit-animation: lds-facebook_1 1s cubic-bezier(0, 0.5, 0.5, 1) infinite; animation: lds-facebook_1 1s cubic-bezier(0, 0.5, 0.5, 1) infinite; -webkit-animation-delay: -0.2s; animation-delay: -0.2s;}.lds-facebook div:nth-child(2){left: 85px; background: #5699d2; -webkit-animation: lds-facebook_2 1s cubic-bezier(0, 0.5, 0.5, 1) infinite; animation: lds-facebook_2 1s cubic-bezier(0, 0.5, 0.5, 1) infinite; -webkit-animation-delay: -0.1s; animation-delay: -0.1s;}.lds-facebook div:nth-child(3){left: 135px; background: #d8ebf9; -webkit-animation: lds-facebook_3 1s cubic-bezier(0, 0.5, 0.5, 1) infinite; animation: lds-facebook_3 1s cubic-bezier(0, 0.5, 0.5, 1) infinite;}.lds-facebook{width: 200px !important; height: 200px !important; -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px); transform: translate(-100px, -100px) scale(1) translate(100px, 100px);}</style></div></center>' ?>
            <div id="panel-1" class="panel d-none">
                <div class="panel-hdr">
                    <h2>
                        <i class="far fa-plus-hexagon"></i> Tambah <span class="fw-300"><i>Menu</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form id="edit-berita" method="post" action="<?=base_url('admin/profil/create')?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="form-label">Nama Menu</label>
                                <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Isi</label>
                                <textarea class="js-isi form-control" name="isi" id="isi" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Page</label>
                                <input type="text" class="form-control" name="page" id="page" placeholder="Nama Page">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-block btn-info waves-effect waves-themed">
                                <span class="fal fa-check mr-1"></span>
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
