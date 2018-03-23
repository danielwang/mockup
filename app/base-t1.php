<!-- ******************
*** T1 template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once '_head.php'; ?>

   <?php emptyblock('page-notification') ?>


<!-- ************ topbar ************ -->
    <nav id="gel-navbar" class="navbar navbar-expand-lg navbar-dark bg-navy" role="navigation">
      <div class="container">
        <!-- logo  -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="#" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i aria-hidden="true" class="gel-icon-menu gel-icon-2x"></i></a></li>
          <li class="nav-item"><a class="logo" href="<?php echo ($resURL) ?>"><?php startblock('logo') ?> <img alt="brand logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a></li>
        </ul>
        <ul class="navbar-nav">
          <?php include ("_partials/nav/${parent}.html");?>
          <!-- user panel -->
          <?php include ("_partials/nav/user-panel.html");?>
          <!-- help -->
          <?php include ("_partials/nav/help.html");?>
        </ul>
      </div>
    </nav>
<!-- ************ menu ************  -->
    <aside id="gel-menu" role='menu'>
      <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close-o gel-icon-2x"></i></a>

      <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="brand logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a>
      <?php include ("_partials/menu/user-panel.html");?>

      <menu class="scroll">
        <?php include ("_partials/menu/${parent}.html");?>
      </menu>
    </aside>

<!-- ************  page header ************ -->
<?php startblock('page-header');?>
    <header id="gel-header" role="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8">
              <h1 class="page-title"><?php echo $pageTitle  ?></h1>
            </div>
            <div class="page-actions col-md-3 col-lg-4">
              <span class="item">
                  <a class="text-center" href="#_" title="Print">
                    <i aria-hidden="true" class="gel-icon-lg gel-icon-print" title="Print"></i> <span>Print</span>
                  </a>
              </span>
              <span class="item">
                  <a class="text-center" href="#_" title="Feedback">
                    <i aria-hidden="true" class="gel-icon-lg gel-icon-feedback" title="Feedback"></i> <span>Feedback</span>
                  </a>
              </span>
                <span class="item">
                  <a class="dropdown-toggle text-center" href="#_" title="Help" data-toggle="dropdown">
                    <i class="gel-icon-lg gel-icon-help" aria-hidden="true"></i> <span>Help</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#1" title="Live support"><i class="gel-icon-support" aria-hidden="true"></i>  Live support</a>
                    <a class="dropdown-item" href="#2" title="Knowledge portal"><i class="gel-icon-knowledge-portal" aria-hidden="true" ></i> Knowledge Portal</a>
                    <a class="dropdown-item" href="#3" title="Raise support case"><i class="gel-icon-bullhorn" aria-hidden="true"></i> Raise support case</a>
                  </div>
                </span>
              </div>
          </div>

          <?php startblock('page-tabs') ?>
            <div class="page-tabs" role="tablist">
                <span class="item active"><a href="#">Tab ducimus</a></span>
                <span class="item"><a href="#">Tab consequatur</a></span>
                <span class="item"><a href="#">Tab facere</a></span>
                <span class="item"><a href="#">Tab cumque</a></span>
                <span class="item"><a href="#">Tab maiores</a></span>
                <span class="item"><a href="#">Tab nemo</a></span>
            </div>
          <?php endblock() ?>
    </header>
<?php endblock()?>

<!-- ************  page body ************ -->
		<main id="gel-main" role="main">
			<section class="container">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</main>
<?php include '_foot.html';?>