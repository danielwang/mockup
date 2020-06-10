<?php $blokk = false;  $pageTitle = "GELDoc - Collaborative Form Template"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<?php startblock('page-actions') ?>
  <a href="#" data-toggle="modal" data-target="#collaboratorsModal" aria-label="Collaborators">
    <span aria-hidden="true"><img alt="Peter Parker" class="avatar" src="<?php echo ($resURL) ?>site-images/avatar/users-1.svg" /></span>
    <span aria-hidden="true"><img alt="Peter Parker" class="avatar" src="<?php echo ($resURL) ?>site-images/avatar/users-3.svg" /></span>
    <span aria-hidden="true"><img alt="Peter Parker" class="avatar" src="<?php echo ($resURL) ?>site-images/avatar/users-2.svg" /></span>
    <span class="avatar" title="John Smith">AB</span>
  </a>
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
      <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="push-line" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect id="Rectangle" stroke="#536A81" stroke-width="2" x="3" y="3" width="18" height="18" rx="3"></rect>
              <polyline id="Path" stroke="#536A81" stroke-width="1.65139094" stroke-linecap="round" stroke-linejoin="round" points="16.0500488 9.89453125 14 12 16.0500488 14.1323242"></polyline>
              <line x1="9.5" y1="3.5" x2="9.5" y2="20.5" id="Line-2" stroke="#536A81" stroke-width="2" stroke-linecap="square"></line>
          </g>
      </svg>
      <span class="dot-red align-top position-absolute"></span>
    </button>
</span>    
<?php endblock() ?>

<?php startblock('page-body');?>
<form class="needs-validation">
<div class="gel-doc">
   <!-- gel-doc-nav -->
   <aside class="gel-doc-nav" role="Table of content">
    <?php include "partials/_toc.html" ?>
   </aside>
   <!-- gel-doc-main -->
   <main class="gel-doc-main" role="Main form">
    <!-- <div role="alert" class="alert alert-success alert-dismissible fade show">
        <i aria-hidden="true" class="gel-icon-info"></i>
        A simple primary alert with
        <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
        <i aria-hidden="true" class="gel-icon-close gel-icon-lg"></i>
        </button>
    </div> -->
    <?php include "partials/_form.html" ?>
   </main>
   <!-- gel-doc-aside -->
   <aside class="gel-doc-aside" role="Collaboration panel"> <!-- mt-n-5 mr-n-3  -->
      <button type="button" class="knob btn btn-icon" >
        <i aria-hidden="true" class="gel-icon-close gel-icon-2x"></i>
      </button>
      <div class="h-100">
        <div class="d-flex flex-column">
            <ul role="tablist" class="nav nav-tabs-line justify-content-center">
                <li class="nav-item"><a data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">History</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Comments <sup class="dot-red align-text-top"></sup></a></li>
            </ul>
            <div id="myTabContent" class="tab-content flex-fill">
                <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane show active">
                    <?php include "partials/_timeline.html" ?>
                </div>
                <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane h-100">
                    <?php include "partials/_comments.html" ?>
                </div>
            </div>
        </div>
      </div>  
   </aside>
  <!-- gel-doc-footer -->
  <!-- <footer class="gel-doc-footer" role="Main form footer">
      <section class="container">
      <button type="button" class="btn btn-outline-primary">Close</button>
      <button type="submit" class="btn btn-primary">Save</button>
      </section>
  </footer> -->
</div>
</form>


<script>
const topbar = document.getElementById("gel-navbar");
const header = document.getElementById("gel-header");
const footer = document.querySelector('.gel-doc-footer');
const leftcol = document.querySelector('.gel-doc-nav .toc');
const rightcol = document.querySelector('.gel-doc-aside');
var prevScrollpos = window.pageYOffset;
let topOffSet = (topbar.clientHeight + header.clientHeight)  + 'px';

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
        rightcol.style.height = 'calc(100vh' -(topOffSet) + ')';
      } else {
        //scolling down, hide the navbar and header, show sticky footer
        console.log('scrolling down');
        header.style.top = -(header.clientHeight) +'px';
        topbar.style.top = -(topbar.clientHeight) +'px';
        footer.style.transform = "translateY(0)";
        leftcol.style.top = '15px';
        rightcol.style.top = 0;
        rightcol.style.height = '100vh';
        //
      }
    }
    prevScrollpos = currentScrollPos;
    // remove bottom border on sticky header when scroll on of the page
    if (window.pageYOffset == 0){
      topbar.classList.remove('border-bottom');
    }
  }
};


const rightPanel = document.querySelector('.gel-doc');
document.querySelectorAll('.knob').forEach(item => {
  item.addEventListener('click', event => {
    rightPanel.classList.toggle('open');
  })
})

</script>

<?php endblock()?>
