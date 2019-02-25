<?php $pageTitle = "Branding setup"; $pageAction = true; $parent = "adm"; include '../base-t1.php'; ?>

<?php startblock('page-actions') ?>
<span class="item">
  <a class="text-center" href="#_" title="Help">
    <i class="gel-icon-lg gel-icon-help" aria-hidden="true"></i> <span>Help</span>
  </a>
</span>
<?php endblock() ?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-2">
    <h3>Step 1</h3>
    <p>Select a brand</p>
  </div>
  <div class="col-8">
    <div class="row">
        <div class="col-6">
          <!-- <div class="form-group"> -->
            <!-- <label for="exampleFormControlSelect1">Select a brand</label> -->
            <select class="form-control" id="exampleFormControlSelect1">
              <option value="en">Dairy Farm</option>
              <option value="en-us">IKEA</option>
              <option value="es">7 Eleven</option>
              <option value="de">Manning</option>
              <option value="tr">WELCOME</option>
            </select>
          <!-- </div> -->
        </div>
      </div>
    </div>
  <div class="col-2"></div>
</div>
<div class="row mt-5">
  <div class="col-2"><h3>Step 2</h3><p>Upload logos</p></div>
  <div class="col-8">
    <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label>Primary logo</label>
            <a class="text-center text-muted" href="#_" title="Help">
              <i class="gel-icon-help" aria-hidden="true"></i>
            </a>
            <form style="height:169px" action="/upload-target" class="dropzone gel-dropzone needsclick dz-clickable">
              <div class="dz-message needsclick gray">
                <img src="https://tbcdn.talentbrew.com/company/22908/img/logo/logo-8818-9678.svg">
              </div>
            </form>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label>Reverse logo</label>
            <a class="text-center text-muted" href="#_" title="Help">
              <i class="gel-icon-help" aria-hidden="true"></i>
            </a>
            <form action="/upload-target" class="dropzone gel-dropzone needsclick dz-clickable">
            <div class="dz-message needsclick gray">
              <h5 class="text-muted">Drag &amp; Drop files here</h5>
              <span class="note needsclick">
                Or
                <a href="#_">browse</a>
                from local drive
              </span>
              <p>
                <small>Max 5MB in size, Word, PDF, or JPG formats</small>
              </p>
            </div>
          </form>
          </div>
        </div>

      </div></div>
  <div class="col-2"></div>
</div>
<div class="row mt-5">
  <div class="col-2"><h3>Step 3</h3></h3>
    <p> Choose brand colour</p>
  </div>
  <div class="col-8"><input type="color" id="exampleFormControlInput3" name="color"></div>
  <div class="col-2"></div>
</div>
<div class="row mt-5">
  <div class="col-2"><h3>Step 4 </h3><p>Preview</p></div>
  <div class="col-10">
    <div class="bg-white p-5 rounded">
    <ul class="nav nav-tabs-line" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Candidate portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hiring Manager portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Employee portal</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <nav id="s" class="navbar navbar-expand-sm navbar-dark" style="background-color: #0051BA" role="navigation">
       <div class="container-fluid">
         <!-- logo  -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item"><a href="#" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false"><i aria-hidden="true" class="gel-icon-menu gel-icon-2x"></i></a></li>
           <li class="nav-item"><a class="logo" href="../"> <img alt="brand logo" src="https://tbcdn.talentbrew.com/company/22908/img/logo/logo-8818-9678.svg" width="100"></a></li>
         </ul>
         <ul class="navbar-nav">
           <li class="nav-item d-none d-xl-flex">
              <a class="nav-link" href="jobs">Item</a>
            </li>
            <li class="nav-item d-none d-xl-flex">
              <a class="nav-link" href="#">Item</a>
            </li>
            <li class="nav-item d-none d-xl-flex">
              <a class="nav-link" href="#">Item</a>
            </li>
           <!-- user panel -->
           <li id="nav-user-panel" class="nav-item user-panel">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img class="avatar" src="../site-images/avatar.svg" alt="John's profile">
                John
              </a>
            </li>           <!-- help -->
           <li id="nav-help" class="nav-help nav-item">
          <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" aria-label="Help">
            <i class="gel-icon-help gel-icon-lg" aria-hidden="true"></i>
            <span class="sr-only">Help</span></a>
        </li>
        </ul>
       </div>
     </nav>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">2. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur
          tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
        </div>
        <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">3. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.
          Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse
          potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-5">
  <div class="col-2">
    <h3>Step 5</h3><p>Looks great and save</p>
  </div>
  <div class="col-8">
    <p><button class="btn btn-primary btn-lg">Save</button></p>
  </div>
  <div class="col-2"></div>
</div>

<?php endblock()?>
