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

    <footer class="d-flex flex-row-reverse">
      <button type="button">Continue</button>
      <button type="button">Save and Exit</button>
      <button type="button" class="mr-auto">Back</button>
    </footer>
   </main>  
</div>
<?php endblock()?>



<form>
  <!-- Empty error message div already present in the DOM inside form tag-->
  <div id="errors-msg" role="alert" aria-live="assertive" aria-atomic="true" class="alert alert-danger d-none">
  </div>
</form>

<form>
  <div id="errors-msg" role="alert" aria-live="assertive" aria-atomic="true" class="alert alert-danger">
    <!-- insert erorrs messages -->
    <i aria-hidden="true" class="gel-icon-error"></i>
    There are items that require your attention
    <ul>
      <li>Sourcing channel has expired</li>
      <li>Physical demand is required</li>
    </ul>
  </div>
</form>