<?php $pageTitle = "Atoms"; $parent = "ui"; include '../base-ui.php'; ?>

<?php startblock('page-tabs') ?>
  <?php pageTabs($pageTitle);  ?>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="tab-content" id="nav-tabContent">
    <?php showMarkup($pageTitle, 'html'); ?>
</div>


<div class="nav nav-tabs" id="myTab" role="tablist">
  <span class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
  </span>
  <span class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </span>
  <span class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </span>
</div>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">1</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
</div>
<?php endblock()?>
