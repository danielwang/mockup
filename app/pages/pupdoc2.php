<?php $pageTitle = "Collaborative Form - Page Template"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<style>
#gel-navbar, #gel-header, .position-sticky{
  position:-webkit-sticky;
}

.toc ol {
  border-left: solid 1px #bac6d2;
}
.toc ol li > a.active {
  border-left: 3px solid #0063b0;
  margin-left: -2px;
  color: #0063b0;
}
.pupdoc {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-column-gap: 15px;
}
.pupdoc .card{
   transition: all .1s cubic-bezier(0.4, 0, 1, 1) 0s;
}
.pupdoc .card:focus-within{
   box-shadow: -5px 0 0 0rem rgba(0,99,176,1);
   border-color: #0063b0;
   transform: scale(1.01);
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
    transition: all .5s ease 0s;
}
.pupdoc-right-col{
    grid-column-start:4;
    grid-column-end:5;
    margin: -2rem -1rem 0 0;
    transform: translateX(100%);
    transition: all .5s ease 0s;
    position: sticky;
    position:-webkit-sticky;
    top: 0;
    height: calc(100vh - 130px);
}
.pupdoc-right-col .knob{
  position: absolute;
  z-index: 1;
  top:0.5rem;
  left: 1rem;
}
.open .pupdoc-right-col{
  transform: translateX(0);
}

.toc{
  transition: all 0.3s ease 0s;
}
.timeline{
   height: calc(100vh - 294px);
   overflow: auto;
   display: block;
}
#sticky-footer {
  transition: all .5s ease 0s;
}

@media screen and (max-width: 1200px){
  .pupdoc-left-col{
    justify-self: start;
    grid-column-start:1;
    grid-column-end:2;  
  }
  .pupdoc-middle-col {
      grid-column-start:2;
      grid-column-end:5;
  }
  .pupdoc-right-col{
      display:none;
      grid-column-start:3;
      grid-column-end:5;
      height: calc(100vh - 77px - 60px);
  }
  .open .pupdoc-left-col{
    display:none;
  }
  .open .pupdoc-middle-col{
    grid-column-start:1;
    grid-column-end:3;
  }
  .open .pupdoc-right-col{
    display:block;
  }
}
/* iPad portrait down */
@media screen and (max-width: 992px){
  .pupdoc-left-col{
    display:none;  
  }
  .pupdoc-middle-col{
    grid-column-start:1;
    grid-column-end:5;
  }
  .open .pupdoc-middle-col{
    grid-column-end:5;
    display:none; 
  }

  .open .pupdoc-right-col{
    margin:0;
    position: fixed;
    top: 0 !important;
    left: 0;
    z-index: 9999;
    height: 100vh;
    width: 100vw;
  }

} 

</style>

<?php startblock('page-actions') ?>

<span class="avatar ml-n-1" title="John Smith">JS</span>
<span class="avatar ml-n-1" title="John Smith">DW</span>
<span class="avatar ml-n-1" title="John Smith">PR</span>
<span class="avatar ml-n-1" title="John Smith">AB</span>

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
      <i aria-hidden="true" class="gel-icon-happy"></i>
    </button>
</span>    
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="pupdoc">
   <aside class="pupdoc-left-col">
    <?php include "partials/_toc.html" ?>
   </aside>
   <main class="pupdoc-middle-col">
    <div role="alert" class="alert alert-success alert-dismissible fade show">
        <i aria-hidden="true" class="gel-icon-info"></i>
        A simple primary alert with
        <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
        <i aria-hidden="true" class="gel-icon-close gel-icon-lg"></i>
        </button>
    </div>
    <?php include "partials/_form.html" ?>
   </main>
   <aside class="pupdoc-right-col border-left bg-white"> <!-- mt-n-5 mr-n-3  -->
      <button type="button" class="knob btn btn-icon" >
        <i aria-hidden="true" class="gel-icon-close gel-icon-2x"></i>
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
const leftcol = document.querySelector('.pupdoc-left-col .toc');
const rightcol = document.querySelector('.pupdoc-right-col');
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
        leftcol.style.top = topbar.clientHeight + header.clientHeight + 30 + 'px';
        rightcol.style.top = topbar.clientHeight + header.clientHeight + 'px';
      } else {
        //scolling down, hide the navbar and header
        console.log('scrolling down');
        header.style.top = -(header.clientHeight) +'px';
        topbar.style.top = -(topbar.clientHeight) +'px';
        footer.style.transform = "translateY(0)";
        leftcol.style.top = '15px';
        rightcol.style.top = 0;
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
