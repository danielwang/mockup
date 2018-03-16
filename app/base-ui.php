<!-- ******************
*** T5 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once '_head.php';
  ?>
  <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><span class="nav-toggle"><i class="gel-icon-menu gel-icon-2x"></i></span></li>
        <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="140"/><?php endblock() ?></a></li>
      </ul>
    </div>
  </nav>
  <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
    <span class="nav-toggle close"><i class="gel-icon-close-o gel-icon-2x"></i></span>

    <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="logo" src="<?php echo ($resURL) ?>images/gel-logo.png" width="140"/><?php endblock() ?></a>

    <menu class="scroll">
      <?php include ("_partials/menu/${parent}.html");?>
    </menu>
  </aside>
<!-- page header -->
<header id="gel-header" role="banner">
    <div class="container">
      <h1 class="page-title"><?php echo $pageTitle  ?></h1>
    </div>
</header>
<!-- page body -->
		<main id="gel-main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include '_foot.html';?>
