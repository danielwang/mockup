<?php $pageTitle = "Operations Manager"; $pageAction = true; $pageLayout="-fluid"; $parent = "adm"; include '../base-t2.php';?>

<style>
.toc a {
  color: #1d262d;
  padding: .25rem 0;
  display: inline-block;
  font-family: proxima nova;
}
.toc a:hover {
  color: #0063b0;
}
.toc li {
  margin: 0.25rem 0;
}
.toc li.active > a {
  color: #0063b0;
  position: relative;
}
.toc li.active > a:before {
  content: "";
  border-left: 3px solid #0063b0;
  position: absolute;
  left: 0;
  top: 0;
  width: 3px;
  height: 100%;
}
.toc ol {
  list-style: none;
  margin-left: .25rem;
  padding: 0;
}
.toc ol a {
  padding-left: 1rem;
  font-size: 1rem;
}
.smoothscroll{
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar; 
}
.mid-panel{
   height:80vh;
   overflow: auto;
   scroll-behavior:smooth
}
.timeline{
   height:70vh;
   overflow: auto;
   display: block;
}
form.card{
   transition: all .1s cubic-bezier(0.4, 0, 1, 1) 0s;
}
form.card:focus-within{
   box-shadow: -5px 0 0 0rem rgba(0,99,176,1);
   border-color: #0063b0;
   transform: scale(1.01);
}
#knob{
    position: absolute;
    top: -2rem;
    right:1rem;
    display: block;
}
.hidden-panel{
   position: fixed;
   background: white;
   transform: translateY(100%);
   width: 100vw;
   height: 100vh;
   z-index: 998;
   left: 0;
   transition: transform 0.3s ease 0s;
}
@media (max-width: 767px){
   #knob{
      position: absolute;
      top: -50px;
      right: 1rem;
   }
   .hidden-panel{
      transform: translateY(-76px);
   }
   .hidden-panel.open{
      transform: translateY(-94%);
      z-index: 1000;
   }
   .hidden-panel.open #knob{
      top: 0
   }
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        togglePanel();
    });
    /*****************************************
        Menu toggle
    *****************************************/
    const drawer = document.querySelector('.hidden-panel');
    const knob = document.querySelector('#knob');

    function togglePanel() {
        knob.addEventListener('click', function () {
            drawer.classList.toggle('open');
        });
    }
</script>
<?php startblock('page-title') ?>
    Operations Manager
<?php endblock() ?>

<?php startblock('page-actions') ?>
<div class="viewport-detector">
   <span class="badge badge-warning d-sm-none"><i class="gel-icon-iphone"></i><i class="gel-icon-tablet disabled"></i><i class="gel-icon-laptop disabled"></i> XS &lt; 576px </span> 
   <span class="d-none badge badge-info d-sm-inline-block d-md-none"><i class="gel-icon-iphone rotate-90"></i><i class="gel-icon-tablet disabled"></i><i class="gel-icon-laptop disabled"></i> - SM ≥ 576px
   </span>
   <span class="d-none badge badge-success d-md-inline-block d-lg-none"><i class="gel-icon-iphone disabled"></i><i class="gel-icon-tablet rotate-90"></i><i class="gel-icon-laptop disabled"></i> - MD ≥ 768px
   </span>
   <span class="d-none badge badge-danger d-lg-inline-block d-xl-none"><i class="gel-icon-iphone disabled"></i><i class="gel-icon-tablet"></i><i class="gel-icon-laptop disabled"></i> - LG ≥ 992px
   </span>
   <span class="d-none badge badge-warning d-xl-inline-block d-xxl-none"> <i class="gel-icon-iphone disabled"></i><i class="gel-icon-tablet disabled"></i><i class="gel-icon-laptop"></i> - XL ≥ 1200px
   </span>
   <span class="d-none badge badge-info d-xxl-inline-block"> <i class="gel-icon-iphone disabled"></i><i class="gel-icon-tablet disabled"></i><i class="gel-icon-laptop scale-x"></i> - XXL ≥ 1600px
   </span>
</div>
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row">
   <div class="d-none d-xl-flex col-xl-2 justify-content-xxl-end">
      <nav id="toc-example" role="navigation" aria-label="Table of content" class="toc" >
         <h4 aria-hidden="true">Content</h4>
         <ol>
            <li class="active"><a href="#section1" aria-selected="true">Section heading 1</a>
            </li>
            <?php for ($r=2; $r <= 6; $r++) {?>   
            <li><a href="#section<?php echo $r ?>" aria-selected="false">Section heading <?php echo $r ?>   </a></li>
            <?php } ?>
         </ol>
      </nav>
   </div>
   <div class="scroll mid-panel mt-n-5 pt-5 col-md-7 col-lg-8 col-xl-6 col-xxl-5 offset-xxl-1">
      <div data-spy="scroll" data-target="#toc-example" data-offset="0">
         <div class="row">
               <div class="col-12">
                  <div class="form-group">
                     <input type="text" id="validationCustom01" placeholder="" value="Operations Manager" required="required" class="form-control form-control-lg">
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
               </div>
            </div>      
      <?php for ($r=1; $r <= 7; $r++) {?>   
         <form id="section<?php echo $r ?>" novalidate="novalidate" class="card needs-validation mb-5">
            <h3>Section Heading <?php echo $r ?></h3>
            <div class="row">
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustom01">First name</label><input type="text" id="validationCustom01" placeholder="First name" value="Mark" required="required" class="form-control">
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustom02">Last name</label><input type="text" id="validationCustom02" placeholder="Last name" value="Otto" required="required" class="form-control">
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group"><label for="validationCustom03">Mobile</label><input type="tel" id="validationCustom03" required="required" class="form-control"></div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustomUsername">Username
                     </label><a href="#" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." aria-label="help" class="link-alt"><i class="gel-icon-help-o"></i></a><input type="text" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="required" class="form-control">
                     <div class="invalid-feedback"><i aria-hidden="true" class="gel-icon-error"></i>
                        Please choose a username.
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustom03">City</label><input type="text" id="validationCustom03" placeholder="City" required="required" class="form-control">
                     <div class="invalid-feedback"><i aria-hidden="true" class="gel-icon-error"></i>
                        Please provide a valid city.
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustom04">State</label><input type="text" id="validationCustom04" placeholder="State" required="required" class="form-control">
                     <div class="invalid-feedback"><i aria-hidden="true" class="gel-icon-error"></i>
                        Please provide a valid state.
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="validationCustom05">Zip</label><input type="text" id="validationCustom05" placeholder="Zip" required="required" class="form-control">
                     <div class="invalid-feedback"><i aria-hidden="true" class="gel-icon-error"></i>
                        Please provide a valid zip.
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-xxl-4">
                  <div class="form-group">
                     <label for="exampleFormControlSelect1">Languages</label>
                     <select id="exampleFormControlSelect1" class="form-control">
                        <option value="en">English</option>
                        <option value="en-us">English (US)</option>
                        <option value="es">Español (Spanish)</option>
                        <option value="de">Deutsch (German)</option>
                        <option value="tr">Türkçe (Turkish)</option>
                        <option value="zh-s">简体中文 (Chinese, Simplified)</option>
                        <option value="ja">日本語 (Japanese)</option>
                        <option value="nl">Nederlands (Dutch)</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="form-group"><label for="exampleFormControlTextarea1">Introduction</label><a href="#" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." aria-label="help" class="link-alt"><i class="gel-icon-help-o"></i></a><textarea id="exampleFormControlTextarea1" rows="3" class="form-control"></textarea></div>
            <div class="form-group">
               <div class="checkbox checkbox-primary">
                  <input id="checkbox2" type="checkbox" required="required" class="form-check-input"><label for="checkbox2" class="form-check-label">
                  Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback"><i aria-hidden="true" class="gel-icon-error"></i>
                     You must agree before submitting.
                  </div>
               </div>
            </div>
         </form>
      <?php } ?>  
      </div>
   </div>
   <div class="d-none d-md-block col-md-5 col-lg-4 col-xl-3 offset-xl-1 col-xxl-3 mt-n-5 border-left bg-white thirdPanel">
      <div class="">
         <ul role="tablist" class="nav nav-tabs-line">
            <li class="nav-item"><a data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">History</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Comments</a></li>
         </ul>
         <div id="myTabContent" class="tab-content">
            <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane show active">
                  <ul class="timeline scroll">
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">March 12, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">March 23, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p><a href="#section5">Changes on Section 5</a>. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">April 02, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">April 28, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  </ul>
            </div>
            <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane">
                  <article class="commentary d-flex flex-column justify-content-between h-100">
                  <ol aria-label="comments" class="comment scroll" style="max-height: 300px; height: 500px; overflow-y: auto;">
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">1 day ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident <a href="#section2">Something wrong on Section 1</a></div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">3 hours ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">3 hours ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">2 hours ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">1 hours ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">19 mins ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                  </ol>
                  <div aria-label="comment box" class="commentbox expanded">
                     <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                     <div class="commentbox-input">
                        <label for="comment-input-expanded" class="sr-only">Make a comment</label>
                        <textarea id="comment-input-expanded" class="form-control"></textarea>
                        <div class="text-right mt-2"><button type="button" class="btn btn-link btn-sm">Cancel</button><button type="button" class="btn btn-outline-primary btn-sm">Send</button></div>
                     </div>
                  </div>
                  </article>
            </div>
         </div>
      </div>
   </div>
</div>

<footer class="main-footer border-top fixed-bottom p-2 bg-white d-print-none text-center" style="z-index: 999">
<section class="container">
<button type="button" class="btn btn-primary">Save</button>
</section>
</footer>

<div class="hidden-panel">
   <button id="knob" class="border-top border-left border-right btn btn-icon"><i class="gel-icon-angle-up gel-icon-lg"></i> </button>
   <div class="">
         <ul role="tablist" class="nav nav-tabs-line">
            <li class="nav-item"><a data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true" class="nav-link active">History</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false" class="nav-link">Comments</a></li>
         </ul>
         <div id="myTabContent2" class="tab-content">
            <div id="home2" role="tabpanel" aria-labelledby="home-tab" class="tab-pane show active">
                  <ul class="timeline smoothscroll">
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">March 12, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">March 23, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p><a href="#section5">Changes on Section 5</a>. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">April 02, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  <li class="timeline-item">
                     <div class="timeline-info"><span class="text-label">April 28, 2016</span></div>
                     <div class="timeline-marker"></div>
                     <div class="timeline-content">
                     <h4 class="timeline-title">Event Title</h4>
                     <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis eu pede
                        mollis pretium. Pellentesque ut neque.
                     </p>
                     </div>
                  </li>
                  </ul>
            </div>
            <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane">
                  <article class="commentary d-flex flex-column justify-content-between h-100">
                  <ol aria-label="comments" class="comment smoothscroll" style="max-height: 300px; height: 500px; overflow-y: auto;">
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">1 day ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident <a href="#section2">Something wrong on Section 1</a></div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">3 hours ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">3 hours ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">2 hours ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                              <span class="comment-info">
                              <h5>Peter Parker</h5>
                              <time aria-label="time">1 hours ago</time>
                              </span>
                              <span class="comment-action">
                              <div class="dropdown d-inline-block">
                                 <button type="button" title="Actions" aria-label="actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-icon btn-sm dropdown-toggle no-caret mr-0"><i aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Actions" class="gel-icon-ellipsis"></i></button>
                                 <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Edit</a><a href="#" class="text-danger dropdown-item">Delete</a></div>
                              </div>
                              </span>
                        </div>
                        <div class="comment-body">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
                     </li>
                     <li class="comment-item">
                        <div class="comment-head">
                              <span aria-hidden="true" class="avatar">DW</span>
                              <span class="comment-info">
                              <h5>Daniel Wang</h5>
                              <time aria-label="time">19 mins ago</time>
                              </span>
                        </div>
                        <div class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                     </li>
                  </ol>
                  <div aria-label="comment box" class="commentbox expanded">
                     <span aria-hidden="true" class="avatar"><img alt="Peter Parker" src="https://gel.pageuppeople.com/img/avatar.1a9433e0.svg" width="35px"></span>
                     <div class="commentbox-input">
                        <label for="comment-input-expanded" class="sr-only">Make a comment</label>
                        <textarea id="comment-input-expanded" class="form-control"></textarea>
                        <div class="text-right mt-2"><button type="button" class="btn btn-link btn-sm">Cancel</button><button type="button" class="btn btn-outline-primary btn-sm">Send</button></div>
                     </div>
                  </div>
                  </article>
            </div>
         </div>
      </div>
</div>
<?php endblock()?>
