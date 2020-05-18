<?php $blokk = true;  $pageTitle = "GELDoc - Collaborative Form Template"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<?php startblock('page-body');?>
<style>
.videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<div class="videoWrapper">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/W0Pfejaqavs?rel=0" frameborder="0"></iframe>
</div>
<?php endblock()?>
