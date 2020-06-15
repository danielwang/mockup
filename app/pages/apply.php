<?php $blokk = false; $parent = "adm"; $pageLayout="-fluid"; $pageAction = true; $pageTitle = "Leadership Development & Community Engagement Coordinator"; include '../base-t2.php';?>

<?php startblock('page-body');?>
<div class="gel-doc">
   <!-- gel-doc-nav -->
   <aside class="gel-doc-nav">
   <?php include "partials/_stepper.html" ?>
   </aside>
   <!-- gel-doc-main -->
   <main class="gel-doc-main">
    <?php include "partials/_form-apply.html" ?>

    <footer class="d-flex d-print-none">
      <button type="button" class="btn btn-outline-primary mr-auto">Back</button>
      <button type="button" class="btn btn-outline-primary mr-1">Save and Exit</button>
      <button type="button" class="btn btn-primary">Continue</button>
    </footer>
   </main>  
</div>
<?php endblock()?>
