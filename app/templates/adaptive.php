<?php $blokk = true; $pageAction = true; $pageTitle = "Adaptive Template"; $parent = "adm"; include '../base-t3.php';?>
<?php emptyblock('page-notification') ?>
<?php startblock('page-actions') ?>
  <span class="item">
      <button type="button" class="btn btn-ctrl">Action</button>
  </span>
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <nav class="page-tabs nav" role="tablist">
        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#current-jobs" role="tab" aria-controls="current-jobs" aria-selected="true">Current Jobs</a>
        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Tasks</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Workbench</a>
        <a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Manager Activities</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Action Performed</a>
      </nav>
    </div>
</nav>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="row">
    <div class="col-lg-4 col-xxl-3">
        <div class="vh-50 rounded demo-block-s d-flex justify-content-center mb-5 mb-md-0">
            <h1 class="align-self-center text-muted">Sidebar
                <span class="badge badge-warning d-sm-none"> col-12 </span> <span class="d-none badge badge-info d-sm-inline-block d-md-none"> col-sm-12
                </span>
                <span class="d-none badge badge-success d-md-inline-block d-lg-none"> col-md-12
                </span>
                <span class="d-none badge badge-danger d-lg-inline-block d-xl-none">col-lg-4
                </span>
                <span class="d-none badge badge-warning d-xl-inline-block d-xxl-none">col-xl-4
                </span>
                <span class="d-none badge badge-info d-xxl-inline-block">col-xxl-3
                </span>
            </h1>

        </div>
    </div>
    <div class="col-lg-8 col-xxl-9">
        <div class="vh-100 rounded demo-block d-flex justify-content-center">
            <h1 class="align-self-center text-muted">Primary content
                <span class="badge badge-warning d-sm-none"> col-12 </span> <span class="d-none badge badge-info d-sm-inline-block d-md-none"> col-sm-12
                </span>
                <span class="d-none badge badge-success d-md-inline-block d-lg-none"> col-md-12
                </span>
                <span class="d-none badge badge-danger d-lg-inline-block d-xl-none">col-lg-8
                </span>
                <span class="d-none badge badge-warning d-xl-inline-block d-xxl-none">col-xl-8
                </span>
                <span class="d-none badge badge-info d-xxl-inline-block">col-xxl-9
                </span>
            </h1>
        </div>
    </div>
    </div>
  <footer class="main-footer border-top fixed-bottom p-2 bg-white d-print-none text-center" style="z-index: 999">
    <section class="container">
      <button type="button" class="btn btn-primary">Save</button>
    </section>
  </footer>
<?php endblock()?>
