<!-- ******************
*** T5 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-default">
    <div class="container">
        <a href="<?php echo ($resURL) ?>" class="logo"><img src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"></a>
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
