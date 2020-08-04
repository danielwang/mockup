<?php $blokk = false; $parent = "adm"; $pageAction = true; $pageLayout="-fluid"; $pageTitle = "Form Builder"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
    <?php include "../_partials/_viewport-detector.html" ?>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="d-flex mt-n-5">
    <aside class="bg-white ml-n-3 position-fixed flex-shrink-0 p-3 d-flex flex-column">
        <h5>FORM CONTROLS LIBRARY</h5>
        <div class="overflow-auto scroll blokk flex-grow-1 pr-2" >
            <?php for ($r=1; $r <= 25; $r++) {?>
                <div class="p-3 bg-light mb-2 rounded">
                    Any questions
                </div>    
            <?php } ?>   
        </div> 
    </aside>
    <main id="canvas" class="bg-info flex-grow-1 rounded">
        <!-- toolbar -->
        <div id="toolbar" class="sticky-top bg-green p-3">
            Toolbar
        </div>
        <!-- canvas -->
        <div class="blokk" style="width: 694px">
            <?php include "partials/_form-job.html" ?>
        </div>
        <!-- sticky footer -->
        <footer class="bg-red p-3">footer</footer>
    </main>
</div>                

<?php endblock()?>


<style>
#gel-navbar{
    display:none;
}
aside{
    width:300px;
    flex-basis: 300px;
    height: calc(100vh - 69px);
}
#canvas{
    margin-left:300px;
}
#toolbar{
    position:sticky;
    top:0;
}
footer{
    position:sticky;
    bottom:0;
}
</style>