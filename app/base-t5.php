<!-- ******************
*** T4 special page, eg . 404 500 template ***
******************  -->
<?php
  $site = "MockUp";
  require_once 'ti.php';
  include_once '_head.php';
  global $pageLayout;
  global $pageAction;
?>

  <!-- ************  page body ************ -->
    <main class="d-flex vw-100 vh-100">
        <section class="w-50 bg-navy d-flex justify-content-center align-items-center px-7">
            <?php startblock('page-body')?>
            <?php endblock()?>
        </section>
        <section class="w-50 d-flex justify-content-center align-items-center px-7">
            <img class="img-fluid" src="https://gel.pageuppeople.com/img/maintenance.86528b70.svg" />
        </section>    
    </main>  

  <!-- ************  page footer ************ -->

  <?php include '_foot.html';?>
