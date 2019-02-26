<?php $parent = "adm"; $pageAction = true; $pageTitle = "Retail Customer Service Officer - Melbourne"; include '../base-t1.php';?>

<?php startblock('page-actions') ?>
  <span class="item">
    <a class="btn btn-primary" href="#_" title="Help">
      View applications
    </a>
  </span>
  <span class="item">
    <div class="btn-group show" data-toggle="tooltip" data-placement="top" data-original-title="More actions">
      <button type="button" class="btn btn-ctrl dropdown-toggle no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i aria-hidden="true" class="gel-icon-ellipsis-v"></i>
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
<div class="card">

</div>

<?php endblock()?>
