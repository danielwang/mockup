<?php $blokk = false; $parent = "adm"; $pageAction = true; $pageLayout="-fluid"; $pageTitle = "Fluid layout - Large table"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
<span class="item">
    <button class="btn btn-primary">Action</button>
</span>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<h3>Recent Items</h3>
<div class="overflow-auto border-bottom mb-5 mx-n-3 px-3">
    <?php include "partials/_thumbnails.html" ?>
</div>  
<div class="d-flex h-100">
    <div class="flex-shrink-0 bg-white border-right p-5 mt-n-5 ml-n-3 mr-5">
        <?php include "partials/_search-filters.html" ?>  
    </div>
    <div class="flex-grow-1 overflow-hidden">
        <?php include "partials/_large-table.html" ?>
    </div>
    </div>
</div>                

<?php endblock()?>
