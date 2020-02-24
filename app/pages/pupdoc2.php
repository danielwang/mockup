<?php $pageTitle = "Collaborative Form - Page Template"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<style>

.pupdoc {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 15px;
}

.pupdoc-left-col{
    grid-column-start:1;
    justify-self: end;
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
    margin: -2rem -1rem 0 0;
    transform: translateX(100%);
    transition: all .5s ease 0s;
}
.pupdoc-right-col .knob{
  position: absolute;
}
.open .pupdoc-right-col{
  transform: translateX(0);
}

.timeline{
   height:70vh;
   overflow: auto;
   display: block;
}
#sticky-footer {
  transition: all .5s ease 0s;
}

@media screen and (max-width: 1200px){
  .pupdoc-left-col{
      display:none;
  }
  .pupdoc-middle-col {
      grid-column-start:1;
      grid-column-end:5;
  }
  .pupdoc-right-col{
      display:block;
      grid-column-start:3;
      grid-column-end:5;
      transform: translateX(calc(100% - 50px));
      height: calc(100vh - 77px - 60px);
  }

  .open .pupdoc-middle-col{
    grid-column-end:3;
  }
}
@media screen and (max-width: 992px){
  .open .pupdoc-middle-col{
    grid-column-end:5;
  }

  .open .pupdoc-right-col{
    margin:0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999;
    height: 100vh;
    width: 100vw;
    transform: translateX(0);
  }
} 
/* 

.pupdoc-middle-col {
    grid-column-start:1;
    grid-column-end:5
}
.pupdoc-right-col{

  transform: translateX(100%);
  grid-column-start: 1;
  grid-column-end: 5;
}
.full-screen{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 9999;
    height: 100vh;
    width: 100vw;
    transform: translateX(0);
  }




@media screen and (min-width: 1200px){
    
}

@media screen and (min-width: 1600px){
    .pupdoc-left-col{
        justify-self: end;
    }
} */


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
<span class="item">
    <button type="button" class="knob btn btn-ctrl" >
      <i aria-hidden="true" class="gel-icon-chat"></i>
    </button>
</span>    
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="pupdoc">
   <aside class="pupdoc-left-col">
    <?php include "partials/_toc.html" ?>
   </aside>
   <main class="pupdoc-middle-col">
    <div role="alert" class="alert alert-info alert-dismissible fade show">
        <i aria-hidden="true" class="gel-icon-info"></i>
        A simple primary alert with
        <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
        <i aria-hidden="true" class="gel-icon-close gel-icon-lg"></i>
        </button>
    </div>
        <div data-spy="scroll" data-target="#toc-example" data-offset="0">
        <?php include "partials/_form.html" ?>
        </div>
   </main>
   <aside class="pupdoc-right-col border-left bg-white"> <!-- mt-n-5 mr-n-3  -->
      <button type="button" class="knob btn btn-icon" >
        <i aria-hidden="true" class="gel-icon-angle-right"></i>
      </button>
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

<footer id="sticky-footer" class="main-footer border-top fixed-bottom p-2 bg-white d-print-none text-center" style="z-index: 999">
    <section class="container">
    <button type="button" class="btn btn-outline-primary">Close</button>
    <button type="button" class="btn btn-primary">Save</button>
    </section>
</footer>

<script>
const topbar = document.getElementById("gel-navbar");
const header = document.getElementById("gel-header");
const footer = document.querySelector('#sticky-footer');

var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;

  if (currentScrollPos = topbar.offsetTop){
    if (typeof(header) != 'undefined' && header != null){
      if (prevScrollpos >= currentScrollPos) {
        //scrolling up, hide the sticky footer
        console.log('scrolling up');
        header.style.top = topbar.clientHeight + 'px';
        topbar.style.top = 0;
        footer.style.transform = "translateY(100%)"; // off canvas
      } else {
        //scolling down, hide the navbar and header
        console.log('scrolling down');
        header.style.top = -(header.clientHeight) +'px';
        topbar.style.top = -(topbar.clientHeight) +'px';
        footer.style.transform = "translateY(0)";
      }
    }
    prevScrollpos = currentScrollPos;
    // remove bottom border on sticky header when scroll on of the page
    if (window.pageYOffset == 0){
      topbar.classList.remove('border-bottom');
    }
  }
};


const rightPanel = document.querySelector('.pupdoc');
document.querySelectorAll('.knob').forEach(item => {
  item.addEventListener('click', event => {
    rightPanel.classList.toggle('open');
  })
})

</script>

<?php endblock()?>
