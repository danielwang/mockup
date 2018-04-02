<?php $pageTitle = "Foundations"; $parent = "ui"; include '../base-ui.php'; ?>

<?php startblock('page-tabs') ?>
  <?php pageTabs($pageTitle);  ?>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="tab-content">
    <?php showMarkup($pageTitle, 'html'); ?>
</div>

<?php endblock()?>
