<?php $layout=""; $pageTitle = "ES Page template"; $parent = "es"; include '../base-t1.php';?>

<!-- <?php emptyblock('page-notification') ?>
    <div id="gel-notification" class="gel-notification-control">
      <i class="fa fa-exclamation-circle" aria-hidden="true"></i> You are controlling John Smith’s account
      <button class="btn btn-sm btn-round"> Return to my account</button>
    </div>
<?php endblock() ?> -->

<?php startblock('logo') ?>
  <img alt="Client logo" src="https://www.pageuppeople.com/wp-content/uploads/2016/02/Telstra-Logo-v2.png" width="100"/>
<?php endblock() ?>
<?php startblock('page-title') ?>
  Chloe Williams - My development plan
<?php endblock() ?>
<?php startblock('page-tabs') ?>
  <div class="page-tabs">
      <span class="item active"><a href="#">In progress / Upcoming</a></span>
      <span class="item"><a href="#">Completed</a></span>
      <span class="item"><a href="#">Pending approval <span class="badge">1</span></a></span>
      <span class="item"><a href="#">Shared with me <span class="badge">3</span></a></span>
      <!-- <span class="item"><button type="button" class="pull-right btn btn-ghost btn-primary">
          Explore Library</button></span> -->
  </div>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-8">
      <ul class="nav nav-tabs nav-line">
        <li class="active">
          <a href="#1c">In progress</a>
        </li>
        <li>
          <a href="#2c">Booked</a>
        </li>
        <li>
          <a href="#3c">Wait list</a>
        </li>
      </ul>
      <div class="row-gap">
          <article class="gel-card">
              <header class="gel-card-header">
                  <aside class="gel-card-header-aside">
                      <img class="featured" src="https://picsum.photos/320/240/?random" alt="">
                  </aside>
                  <main class="gel-card-header-main">
                      <h4>
                          <a href="#_">Developing Customer Satisfaction</a>
                      </h4>
                      <p>
                          <span class="label label-warning">Mandatory
                          </span>
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
                      <div style="display: flex; justify-content: space-between;">
                        <span class="small gray"><i class="fa fa-files-o"></i> Training</span>
                        <span class="small gray"><i class="fa fa-thumbs-up"></i> 25 Likes </span>
                        <span class="small gray"><i class="fa fa-comments-o"></i> 15 Comments </span>
                      </div>
                  </main>
              </header>
          </article>
          <article class="gel-card">
              <header class="gel-card-header">
                  <aside class="gel-card-header-aside">
                      <img class="featured" src="https://placeimg.com/320/240/any" alt="">
                  </aside>
                  <main class="gel-card-header-main">
                      <h4>
                          <a href="#_">Salesforce Administration Training</a>
                      </h4>
                      <p>
                          <span class="label label-warning">Mandatory
                          </span>
                      </p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
                      <div style="display: flex; justify-content: space-between;">
                        <span class="small gray"><i class="fa fa-files-o"></i> Training</span>
                        <span class="small gray"><i class="fa fa-thumbs-up"></i> 25 Likes </span>
                        <span class="small gray"><i class="fa fa-comments-o"></i> 15 Comments </span>
                      </div>
                  </main>
              </header>
          </article>
          <article class="gel-card">
              <header class="gel-card-header">
                  <aside class="gel-card-header-aside">
                      <img class="featured" src="<?php echo ($resURL) ?>images/image-placeholder.png" alt="">
                  </aside>
                  <main class="gel-card-header-main">
                      <h4>
                          <a href="#_">Basic Concepts for Business Law Essentials</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
                      <p></p>
                      <div style="display: flex; justify-content: space-between;">
                        <span class="small gray"><i class="fa fa-files-o"></i> Training</span>
                        <span class="small gray"><i class="fa fa-thumbs-up"></i> 25 Likes </span>
                        <span class="small gray"><i class="fa fa-comments-o"></i> 15 Comments </span>
                      </div>
                  </main>
              </header>
          </article>
      </div>
  </div>
  <div class="col-sm-4">
    <!-- <div class="gel-box" style="color:white; background: linear-gradient(100deg, #257ba080, #257ba080);">
      <p class="lead">You can also access on-the-job development activities, recommended reading, and plenty of other resources.</p>
      <p class="text-center"><button type="button" class="btn btn-info btn-round"><i class="fa fa-graduation-cap"></i> Library</button> <button type="button" class="btn btn-info btn-round btn-outline"><i class="fa fa-calendar"></i> Events</button></p>
    </div> -->
    <div class="gel-box" style="background: linear-gradient(100deg, #DDF2FB, #DDF2FB);">
      <p class="lead">You can also access on-the-job development activities, recommended reading, and plenty of other resources.</p>
      <p class="text-center"><button type="button" class="btn btn-info btn-round"><i class="fa fa-graduation-cap"></i> Library</button> <button type="button" class="btn btn-info btn-round btn-outline"><i class="fa fa-calendar"></i> Events</button></p>
    </div>
    <a target="_blank" href="landing"><img style="max-width:100%; border-radius:6px" src="<?php echo ($resURL) ?>images/learn-app.png" alt="learning app home" /> </a>
  </div>
</div>
<?php endblock()?>
