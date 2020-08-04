<?php $blokk = false; $parent = "adm"; $pageAction = true; $pageLayout="-fluid"; $pageTitle = "Form Builder"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
    <?php include "../_partials/_viewport-detector.html" ?>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="d-flex">
    <!-- library -->
    <aside class="bg-warning ml-n-3 flex-shrink-0 p-3 d-flex flex-column border-right">
        <h5>CONTROLS LIBRARY</h5>
        <div class="overflow-auto scroll blokk flex-grow-1 pr-2" >
            <?php for ($r=1; $r <= 25; $r++) {?>
                <div class="p-3 bg-light mb-2 rounded">
                    item
                </div>    
            <?php } ?>   
        </div> 
    </aside>
    <!-- canvas wrapper-->
    <main id="canvas-wrapper" class="bg-info flex-grow-1 d-flex flex-column pl-4">
        <!-- toolbar -->
        <div id="toolbar" class="sticky-top bg-green p-3 mb-4">
            Toolbar
        </div>
        <!-- canvas -->
        <div id="canvas" class="flex-grow-1">
            <?php for ($r=1; $r <= 10; $r++) {?>
                <div class="card w-100 vh-20 mb-4">
                </div>    
            <?php } ?>  
        </div>
        <!-- sticky footer -->
        <footer class="bg-red p-3">footer</footer>
    </main>
</div>                
<style>
#gel-navbar{
    display:none;
}
#gel-header{
    position:sticky;
    top:0;
}
#gel-main{
    padding:0;
}
aside{
    width:300px;
    flex-basis: 300px;
    position: sticky;
    top: 69px;
    height: calc(100vh - 69px);
}

#canvas {
    width: 694px
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
<?php endblock()?>


