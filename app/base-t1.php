<!-- ******************
*** T1 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php'; ?>

   <?php emptyblock('page-notification') ?>
   <!-- ************ menu ************  -->
  <aside id="gel-menu" role='menu'>
         <a href="#" aria-label="Close menu" class="nav-toggle close" aria-expanded="false"><i aria-hidden="true" class="gel-icon-close-o gel-icon-2x"></i></a>

         <a href="<?php echo ($resURL) ?>" class="logo"> <?php startblock('logo') ?><img alt="brand logo" src="<?php echo ($resURL) ?>images/pu-logo.png" width="100"/><?php endblock() ?></a>
         <?php include ("_partials/menu/user-panel.html");?>

         <menu class="scroll">
           <?php include ("_partials/menu/${parent}.html");?>
         </menu>
       </aside>
  <!-- ************ topbar ************ -->
  <nav id="gel-navbar" class="navbar navbar-expand-sm navbar-dark bg-navy" role="navigation">
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


  <!-- ************  page header ************ -->
  <?php startblock('page-header');?>
      <header id="gel-header" role="banner">
          <div class="container">
            <h1 class="page-title"><?php echo $pageTitle  ?></h1>

            <?php startblock('page-tabs') ?>
            <ul class="page-tabs nav" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="Tab one" aria-selected="true">Tab one</a></li>
              <li class="nav-item"><a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="Tab two" aria-selected="">Tab two</a></li>
              <li class="nav-item"><a class="nav-link " id="tab-3" data-toggle="tab" href="#tab3" role="tab" aria-controls="Tab three" aria-selected="">Tab Three</a></li>
              <li class="nav-item"><a class="nav-link " id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="Tab four" aria-selected="">Tab four</a></li>
              <li class="nav-item"><a class="nav-link " id="tab-5" data-toggle="tab" href="#tab5" role="tab" aria-controls="Tab five" aria-selected="">Tab five</a></li>
              <li class="nav-item"><a class="nav-link " id="tab-6" data-toggle="tab" href="#tab6" role="tab" aria-controls="Tab six" aria-selected="">Tab six</a></li>
            </ul>
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
  <!-- ************  page footer ************ -->
  <footer id="gel-footer" role="footer">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 offset-md-2 text-right">
          <div class="btn-group dropup">
            <button type="button" class="btn btn-sm btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              English
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#1">English (US)</a>
              <a class="dropdown-item" href="#2">Español (Spanish)</a>
              <a class="dropdown-item" href="#3">Deutsch (German)</a>
              <a class="dropdown-item" href="#4">简体中文 (Chinese, Simplified)</a>
              <a class="dropdown-item" href="#5">日本語 (Japanese)</a>
              <a class="dropdown-item" href="#6">Nederlands (Dutch)</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 text-right">
          <span id="langChange" class="control-language-switcher" data-control="LanguageSwitcher">
              <select class="form-control form-control-sm w-auto d-inline" name="langList" id="langList">
                      <option value="en">English</option>
                      <option value="en-us">English (US)</option>
                      <option value="es">Español (Spanish)</option>
                      <option value="de">Deutsch (German)</option>
                      <option value="tr">Türkçe (Turkish)</option>
                      <option value="zh-s">简体中文 (Chinese, Simplified)</option>
                      <option value="ja">日本語 (Japanese)</option>
                      <option value="nl">Nederlands (Dutch)</option>
              </select>
          </span>
        </div>
        <div class="col-6 col-md-2 text-right">
          Powered by
          <a href="https://www.pageuppeople.com/powered-by-pageup/" target="_blank">PageUp</a>
        </div>
      </div>
    </div>
  </footer>
<?php include '_foot.html';?>
