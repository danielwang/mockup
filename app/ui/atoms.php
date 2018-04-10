<?php $pageTitle = "Atoms"; $parent = "ui"; include '../base-ui.php'; ?>

<?php startblock('page-tagline');?>
  Atoms are the basic building blocks of matter. Applied to web interfaces, atoms are our HTML tags, such as a form label, an input or a button.
<?php endblock() ?>
<?php startblock('page-tabs') ?>
  <?php pageTabs($pageTitle);  ?>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="tab-content">
    <?php showMarkup($pageTitle, 'html'); ?>
</div>

<?php endblock()?>
