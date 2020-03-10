<?php $parent = "adm"; $pageAction = true; $blokk=true; $pageLayout="-fluid"; $pageTitle = "GEL Table"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
<span class="item">
    <button class="btn btn-primary">Action</button>
</span>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<?php include "../pages/partials/_large-table.html" ?>
<?php endblock()?>
