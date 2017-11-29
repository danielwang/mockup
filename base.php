<!-- ******************
*** T5 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index"><img src="<?php echo ($resURL) ?>images/gel-logo.png" width="80"></a>
      </div>
    </div>
  </nav>
<!-- page header -->

<?php startblock('page-header') ?>
<?php endblock() ?>

<!-- page body -->
		<main id="gel-main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include 'foot.html';?>
