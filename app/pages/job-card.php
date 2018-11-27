<?php $parent = "adm"; $pageAction = true; $pageTitle = "Retail Customer Service Officer - Melbourne"; include '../base-t1.php';?>

<?php startblock('page-actions') ?>
<span class="item">
  <a class="text-center" href="#_" title="Help">
    <i class="gel-icon-lg gel-icon-print" aria-hidden="true"></i> <span>Print</span>
  </a>
</span>
  <span class="item">
    <a class="dropdown-toggle text-center" href="#_" title="Help" data-toggle="dropdown">
      <span>Actions</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="#3" title="History">History</a>
      <a class="dropdown-item" href="#3" title="Revision history">Revision history</a>
      <a class="dropdown-item" href="#2" title="Copy job">Copy job</a>
      <a class="dropdown-item" href="#1" title="Close job">Close job</a>
    </div>
  </span>
<?php endblock() ?>

<?php startblock('page-tabs') ?>
<nav id="gel-subpages" role="navigation">
   <div class="container">
      <ul class="page-tabs nav" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#applications" role="tab" aria-controls="Tab one" aria-selected="true">Applications</a></li>
        <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#tasks" role="tab" aria-controls="Tab two" aria-selected="false">Position Info</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Notes</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#workbench" role="tab" aria-controls="Tab three" aria-selected="false">Documents</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#manager-activities" role="tab" aria-controls="Tab four" aria-selected="false">Sourcing</a></li>
        <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#performed-actions" role="tab" aria-controls="Tab three" aria-selected="false">Reports</a></li>
      </ul>
    </div>
</nav>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card">

    </div>
  </div>
  <div class="col-md-2"></div>
</div>

<?php endblock()?>
