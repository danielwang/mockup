<?php $pageTitle = "Molecules"; $parent = "ui"; include '../base-ui.php'; ?>

<?php startblock('page-tabs') ?>
  <?php pageTabs($pageTitle);  ?>
<?php endblock() ?>

<?php startblock('page-tagline');?>
  Molecules are groups of atoms bonded together and are the smallest fundamental units of a compound.
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="tab-content">
    <?php showMarkup($pageTitle, 'html'); ?>
</div>

<?php endblock()?>
