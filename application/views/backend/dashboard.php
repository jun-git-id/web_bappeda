<main id="js-page-content" role="main" class="page-content">
   <!--  <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item">category_1</li>
        <li class="breadcrumb-item">category_2</li>
        <li class="breadcrumb-item active">Page Titile</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol> -->
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-'></i> Dashboard <span class='fw-300'>Admin</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
        </h1>
        <div class="subheader-block">
            Right content of header
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <?= $jml_post; ?>
                        <small class="m-0 l-h-n">Jumlah Post</small>
                    </h3>
                </div>
                <i class="fal fa-paper-plane position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <?= $jml_file; ?>
                        <small class="m-0 l-h-n">File Download</small>
                    </h3>
                </div>
                <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="p-3 bg-info-400 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <?= $jml_user; ?>
                        <small class="m-0 l-h-n">Jumlah User</small>
                    </h3>
                </div>
                <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="p-3 bg-danger-400 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        <?= $jml_carousel; ?>
                        <small class="m-0 l-h-n">Jumlah Carousel</small>
                    </h3>
                </div>
                <i class="fal fa-image position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div id="panel-4" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Jumlah <span class="fw-300"><i>Postingan</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="panel-tag">
                            Adding tooltips is easy, you will need to include the plugin <code>jquery.flot.tooltip.js</code>
                        </div>
                        <div id="flot-line-alt" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</main>