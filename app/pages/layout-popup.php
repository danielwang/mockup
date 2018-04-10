<?php $pageTitle = "ES Page template"; $parent = "es"; include '../base-t1.php';?>

<?php startblock('page-title') ?>
  Chloe Williams - My development plan
<?php endblock() ?>
<?php startblock('page-tabs') ?>
  <div class="page-tabs">
      <span class="item active"><a href="#">In progress / Upcoming</a></span>
      <span class="item"><a href="#">Completed</a></span>
      <span class="item"><a href="#">Pending approval <span class="badge">1</span></a></span>
      <span class="item"><a href="#">Shared with me <span class="badge">3</span></a></span>
      <!-- <span class="item"><button type="button" class="pull-right btn btn-ghost btn-primary">
          Explore Library</button></span> -->
  </div>
<?php endblock() ?>
<?php startblock('page-body');?>

<?php endblock()?>
