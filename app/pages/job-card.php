<?php $blokk = false; $parent = "adm"; $pageLayout="-fluid"; $pageAction = true; $pageTitle = "Retail Customer Service Officer - Melbourne"; include '../base-t2.php';?>
<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation" class="d-print-none">
   <div class="container-fluid">
      <nav class="page-tabs nav" role="tablist">
        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#current-jobs" role="tab" aria-controls="current-jobs" aria-selected="true">Position info</a>
        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Applications (12)</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Sourcing</a>
        <a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Documents</a>
        <a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Reports</a>
      </nav>
    </div>
</nav>
<?php endblock() ?>
<?php startblock('page-actions') ?>
  <span class="item">
    <div class="btn-group show" data-toggle="tooltip" data-placement="top" data-original-title="More actions">
      <button type="button" class="btn btn-ctrl dropdown-toggle no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i aria-hidden="true" class="gel-icon-ellipsis"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-expanded="true">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
  </span>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="gel-doc">
   <!-- gel-doc-nav -->
   <aside class="gel-doc-nav">
    <nav id="toc" role="navigation" aria-label="Table of content" class="toc position-sticky vh-70 overflow-auto" style="top: 15px;">
      <h4 aria-hidden="true">Content</h4>
      <ol>
        <li><a href="#section1" class="" aria-selected="False">Job Requisition Information </a></li>
            
        <li><a href="#section2" class="" aria-selected="False">Position Budget </a></li>
            
        <li><a href="#section3" class="" aria-selected="False">Position Details </a></li>
            
        <li><a href="#section4" class="" aria-selected="False">Job Duties </a></li>
            
        <li><a href="#section5" class="" aria-selected="False">Background Checks </a></li>
            
        <li><a href="#section6" class="" aria-selected="False">Search Committee </a></li>
            
        <li><a href="#section7" class="" aria-selected="False">Advertising Details </a></li>
            
        <li><a href="#section8" class="" aria-selected="False">Human Resources Only </a></li>
            
        <li><a href="#section9" class="" aria-selected="False">Users & Approvals</a></li>
      </ol>
    </nav>
   </aside>
   <!-- gel-doc-main -->
   <main class="gel-doc-main">
    <?php include "partials/_form-job.html" ?>
   </main>
  <!-- gel-doc-footer -->
  <footer class="gel-doc-footer d-print-none text-center">
      <section class="container">
      <button type="button" class="btn btn-outline-primary">Close</button>
      <button type="button" class="btn btn-primary">Save</button>
      </section>
  </footer>
</div>
<?php endblock()?>
