<!-- ******************
*** T1 product template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

   <!-- ************ menu ************  -->
  <aside id="gel-menu" class="sg bg-navy" role='menu'>
     <a href="<?php echo ($resURL) ?>" class="logo d-block"> <?php startblock('logo') ?><img alt="brand logo" src="<?php echo ($resURL) ?>site-images/pageup-gel-logo.png" width="136"/><?php endblock() ?></a>
     <!-- <form class="search-group form-inline" role="search">
      <label class="sr-only" for="quick-search" aria-label="Search">
         Search</label>
      <input id="quick-search" class="form-control" placeholder="search" type="Search">
    </form> -->
     <menu class="scroll">
       <?php include ("_partials/menu/ui.html");?>
     </menu>
   </aside>

  <!-- ************  page body ************ -->
	<main class="sg d-flex flex-column flex-fill" role="main">
    <!-- ************  page header ************ -->
    <header id="gel-header" class="py-3 py-xl-5" role="banner">
        <div class="container py-3 py-xl-5">
          <div class="row">
            <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
              <h1 class="display-3 text-primary"><?php echo $pageTitle  ?></h1>
              <blockquote class="tagline text-muted"><?php emptyblock('page-tagline');?></blockquote>
            </div>
          </div>
        </div>
    </header>
    <?php if ($hasSubPage == true) {?>
      <nav id="gel-subpages" role="navigation">
         <div class="container">
           <div class="row">
             <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
                <nav class="page-tabs nav" role="tablist">
                  <?php startblock('page-tabs') ?>
                  <?php endblock() ?>
                </nav>
              </div>
            </div>
         </div>
       </nav>
    <?php } ?>
		<section class="container flex-grow-1 py-5">
      <div class="row">
        <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
  			<?php startblock('page-body')?>
  			<?php endblock()?>
      </div>
		</section>
    <footer id="gel-footer" role="footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a class="text-muted" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Slack" href="https://pageup.slack.com/messages/C2X8J0V70/team/">
              <i aria-hidden="true" class="gel-icon-slack" title="Slack"></i>
            </a>
            <a class="text-muted" data-toggle="tooltip" data-placement="top" target="_blank" href="https://github.com/PageUpPeopleOrg/PU-Styleguide" data-original-title="Github">
                <i class="gel-icon-github" aria-hidden="true"></i></a>
          </div>
          <div class="col-6 text-right">
            Design by DUX team 2019
            <a target="_blank" href="https://www.pageuppeople.com/">PageUp</a>
          </div>
        </div>
      </div>
    </footer>
	</main>
  <!-- ************  page footer ************ -->
<?php include '_foot.html';?>
