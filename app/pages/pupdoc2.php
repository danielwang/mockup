<?php $pageTitle = "Collaborative Form - PUP Doc Template"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<style>
.pupdoc {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 15px;
}
.pupdoc-left-col{
    display:none;
}
.pupdoc-middle-col {
    grid-column-start:1;
    grid-column-end:5;
}
.pupdoc-right-col{
    display:none;
}

.timeline{
   height:70vh;
   overflow: auto;
   display: block;
}

@media screen and (min-width: 768px){
    .pupdoc-middle-col {
        grid-column-start:1;
        grid-column-end:3;
    }
    .pupdoc-right-col{
        display:block;
        grid-column-start:3;
        grid-column-end:5;
    }
}

@media screen and (min-width: 1200px){
    .pupdoc-left-col{
        display:block;
        grid-column-start:1;
        justify-self: start;
    }
    .pupdoc-middle-col {
        grid-column-start:2;
        grid-column-end:4;
        justify-self: center;
        max-width:720px;
    }
    .pupdoc-right-col{
        grid-column-start:4;
        grid-column-end:5;
    }
}

@media screen and (min-width: 1600px){
    .pupdoc-left-col{
        justify-self: end;
    }
}


</style>

<?php startblock('page-actions') ?>

<span class="avatar ml-n-1" title="John Smith">JS</span>
<span class="avatar ml-n-1" title="John Smith">DW</span>
<span class="avatar ml-n-1" title="John Smith">PR</span>
<span class="avatar ml-n-1" title="John Smith">AB</span>

<span class="item">
    <a class="btn btn-primary" href="#_" title="Help">
      Action
    </a>
  </span>
  <span class="item">
    <div class="btn-group show" data-toggle="tooltip" data-placement="top" data-original-title="More actions">
      <button type="button" class="btn btn-ctrl dropdown-toggle no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i aria-hidden="true" class="gel-icon-ellipsis"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-expanded="true">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
  </span>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="pupdoc">
   <aside class="pupdoc-left-col">
    <?php include "partials/_toc.html" ?>
   </aside>
   <main class="pupdoc-middle-col">
        <div data-spy="scroll" data-target="#toc-example" data-offset="0">
        <?php include "partials/_form.html" ?>
        </div>
   </main>
   <aside class="pupdoc-right-col mt-n-5 mr-n-3 border-left bg-white position-sticky" style="z-index:1001; top:0; height: calc(100vh - 77px - 60px)">
      <div class="h-100">
         <ul role="tablist" class="nav nav-tabs-line justify-content-center">
            <li class="nav-item"><a data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">History</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Comments <sup class="dot-red align-text-top"></sup></a></li>
         </ul>
         <div id="myTabContent" class="tab-content">
            <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane show active">
                <?php include "partials/_timeline.html" ?>
            </div>
            <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane h-100">
                <?php include "partials/_comments.html" ?>
            </div>
         </div>
      </div>
   </aside>
</div>

<footer class="main-footer border-top fixed-bottom p-2 bg-white d-print-none text-center" style="z-index: 999">
    <section class="container">
    <button type="button" class="btn btn-outline-primary">Close</button>
    <button type="button" class="btn btn-primary">Save</button>
    </section>
</footer>

<script>
const topbar = document.getElementById("gel-navbar");
const header = document.getElementById("gel-header");
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;

  if (currentScrollPos = topbar.offsetTop){
    if (typeof(header) != 'undefined' && header != null){
      if (prevScrollpos >= currentScrollPos) {
        //scrolling up
        console.log('scrolling up');
        header.style.top = topbar.clientHeight + 'px';
        topbar.style.top = 0;
      } else {
        //scolling down
        console.log('scrolling down');
        header.style.top = -(header.clientHeight) +'px';
        topbar.style.top = -(topbar.clientHeight) +'px';
      }
    }
    prevScrollpos = currentScrollPos;
    // remove bottom border on sticky header when scroll on of the page
    if (window.pageYOffset == 0){
      topbar.classList.remove('border-bottom');
    }
  }
};
</script>

<?php endblock()?>
