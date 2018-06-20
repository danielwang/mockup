<?php $pageTitle = "Organisms"; $parent = "ui"; include '../base-ui.php'; ?>

<?php startblock('page-tabs') ?>
  <?php pageTabs($pageTitle);  ?>
<?php endblock() ?>

<?php startblock('page-tagline');?>
Organisms are groups of molecules joined together to form a relatively complex, distinct section of an interface.
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="tab-content">
    <?php showMarkup($pageTitle, 'html'); ?>
</div>

<?php endblock()?>
