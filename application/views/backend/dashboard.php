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
            <i class='subheader-icon fal fa-'></i> Page <span class='fw-300'>Title</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
            <small>
                blank description
            </small>
        </h1>
        <div class="subheader-block">
            Right content of header
        </div>
    </div>
    <div class="alert alert-primary">
        <div class="d-flex flex-start w-100">
            <div class="mr-2 hidden-md-down">
                <span class="icon-stack icon-stack-lg">
                    <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                    <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                    <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                </span>
            </div>
            <div class="d-flex flex-fill">
                <div class="flex-fill">
                    <span class="h5">About</span>
                    <p>Points.</p>
                    <p class="m-0">
                        Find in-depth, guidelines, tutorials and more on Addon's <a href="#" target="_blank">Official Documentation</a>
                    </p>
                </div>
            </div>
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
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div id="panel-4" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Flot <span class="fw-300"><i>Line (tooltip)</i></span>
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