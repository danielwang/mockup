<?php $pageTitle = "New Starter Tasks"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<div class="row">
  <div class="col-lg-4 col-xxl-3">
    <h3>Emily Johnson</h3>
    <dl>
        <dt>Position</dt>
        <dd>Sennior project manager - NSW contractor</dd>
        <dt>Start Date</dt>
        <dd>31 March 2018</dd>
    </dl>
    <p class="mb-4"><button class="btn btn-outline-primary btn-block">Notify Emily of updates</button></p>
    <div id="accordion2" class="accordion mb-4" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header light-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
              Additional tasks
            </a>
          </h5>
        </div>
        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body pb-0">
            <p class="row">
              <span class="col-8">Organizational Introductions and Onboarding tasks</span>
              <span class="col-4 text-right">
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i>
                </button>
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i>
                </button>
              </span>
            </p>
            <hr>
            <p class="row">
              <span class="col-8">New starter signed contract?</span>
              <span class="col-4 text-right">
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i>
                </button>
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i>
                </button>
              </span>
            </p>
            <hr>
            <p class="row">
              <span class="col-8">On-site client visit</span>
              <span class="col-4 text-right">
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i>
                </button>
                <button type="button" aria-label="Add" class="btn btn-icon">
                  <i class="gel-icon-add" data-toggle="tooltip" data-placement="bottom" data-original-title="Add"></i>
                </button>
              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header light-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
              My Favourite tasks
            </a>
          </h5>
        </div>
        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body p-0">
            <div class="p-3">There are no tasks</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-xxl-9">
     <div class="row">
      <div class="order-2 order-md-1 mt-3 mt-md-0 col-md-7">
        <h5>Visibility</h5>
        <fieldset>
          <legend class="sr-only">visibility</legend>
          <div class="btn-group btn-group-toggle segmented-control">
            <label>
              <input type="radio" name="options-seg-v" id="option1" autocomplete="off" checked="checked">
              <span class="btn btn-ctrl" title="All tasks">
                All tasks
              </span>
            </label>
            <label>
              <input type="radio" name="options-seg-v" id="option2" autocomplete="off">
              <span class="btn btn-ctrl" title="Manager">
                Manager
              </span>
            </label>
            <label>
              <input type="radio" name="options-seg-v" id="option3" autocomplete="off">
              <span class="btn btn-ctrl" title="Employee">
                Employee
              </span>
            </label>
          </div>
        </fieldset>
      </div>
      <div class="order-1 order-md-2 offset-md-2 col-md-3 d-flex justify-content-end align-items-end mt-3">
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#createModal">Create a task</button>
      </div>
    </div>
      <table class="table mt-3 mt-md-4">
        <caption class="sr-only">List of tasks</caption>
        <thead class="thead-dark">
          <tr>
            <th scope="col">Task</th>
            <th scope="col">Assigned to</th>
            <th scope="col">Due date</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php for ($c =1; $c <= 4; $c++) {?>
          <tr><td scope="row" class="section-heading" colspan="5"> <h5 class="mb-0 float-left mt-1">James's Day <?php echo $c ?></h5> <button class="float-right btn btn-sm btn-ctrl"><i class="gel-icon-sm gel-icon-add"></i> Add</button></td></tr>
          <tr>
            <th scope="row"><a href="#" data-toggle="modal" data-target="#responsiveModal">Get your gears set up</a></th>
            <td data-title="Assigned to">Emily Employee</td>
            <td data-title="Due date">06 March 2018 </td>
            <td data-title="Status" class="text-success">Completed</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-icon"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></button>
                <button type="button" class="btn btn-icon" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></button>
                <!-- <button type="button" class="btn btn-icon" aria-label="Drag and drop"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></button> -->
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-outline-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-outline-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Attend Culture Orientation</a></th>
            <td data-title="Assigned to">Arnold Schwarzenegger</td>
            <td data-title="Due date">06 March 2018</td>
            <td data-title="Status" class="text-danger">Overdue</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-icon"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></button>
                <button type="button" class="btn btn-icon" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></button>
                <!-- <button type="button" class="btn btn-icon" aria-label="Drag and drop"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></button> -->
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-outline-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-outline-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">Provide scope items to new starter</a></th>
            <td data-title="Assigned to">Emily Employee</td>
            <td data-title="Due date">06 March 2018</td>
            <td data-title="Status">Open</td>
            <td scope="row">
              <span class="d-none d-md-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-icon"><i class="gel-icon-pencil" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"></i></button>
                <button type="button" class="btn btn-icon" aria-label="Delete" data-toggle="modal" data-target="#deleteTask"><i class="gel-icon-trash" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete"></i></button>
                <!-- <button type="button" class="btn btn-icon" aria-label="Drag and drop"><i class="dragable gel-icon-drag" data-toggle="tooltip" data-placement="bottom" data-original-title="Drag and drop to reorder the task"></i></button> -->
              </span>
              <span class="d-md-none d-flex justify-content-between">
                <a href="#" class="btn btn-outline-primary" aria-label="Edit">Edit</a>
                <a href="#" class="btn btn-outline-primary" aria-label="Delete" data-toggle="modal" data-target="#deleteTask">Delete</a>
              </span>
            </td>
          </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>
</div>

<!-- Create task Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <!-- <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Create a new task</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <?php include ("../ui/_partials/form-sm.html");?>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary mr-auto" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div> -->
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <article class="bg-white p-5 rounded mb-5 text-center">
          <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Success illustration</title>
            <desc>Created with Sketch.</desc>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard" transform="translate(-349.000000, -160.000000)">
                <g id="Success-illustration" transform="translate(349.000000, 160.000000)">
                  <circle id="Oval" fill="#D7F3D2" cx="41.5578947" cy="41.5578947" r="34.4842105"></circle>
                  <g id="noun_success_2019805" fill="#328423">
                    <path d="M41.8231579,83.1157895 C18.8336842,83.0273684 0.265263158,64.4589474 0.353684211,41.4694737 C0.442105263,18.48 19.0105263,-0.0884210526 42,6.2824637e-15 C46.4210526,6.2824637e-15 50.7536842,0.707368421 54.9094737,2.12210526 C55.8821053,2.38736842 56.4126316,3.36 56.1473684,4.33263158 C55.8821053,5.30526316 54.8210526,5.74736842 53.9368421,5.48210526 C53.9368421,5.48210526 53.8484211,5.48210526 53.8484211,5.48210526 C33.6884211,-1.14947368 12.0252632,9.81473684 5.48210526,29.8863158 C4.24421053,33.6884211 3.53684211,37.5789474 3.53684211,41.5578947 C3.71368421,62.6905263 21.0442105,79.6673684 42.1768421,79.4905263 C60.8336842,79.3136842 76.5726316,65.6968421 79.5789474,47.3052632 C79.7557895,46.3326316 80.64,45.6252632 81.6126316,45.8021053 C82.5852632,45.9789474 83.2926316,46.8631579 83.1157895,47.8357895 C80.0210526,67.9957895 62.2484211,83.1157895 41.8231579,83.1157895 Z" id="Path"></path>
                    <path d="M40.2315789,55.3515789 C39.7894737,55.3515789 39.3473684,55.1747368 38.9936842,54.8210526 L21.7515789,37.6673684 C21.0442105,36.96 21.0442105,35.8989474 21.7515789,35.1915789 C22.4589474,34.4842105 23.52,34.4842105 24.2273684,35.1915789 L40.2315789,51.1073684 L76.9263158,14.5894737 C77.5452632,13.8821053 78.6947368,13.7936842 79.4021053,14.5010526 C80.1094737,15.12 80.1978947,16.2694737 79.4905263,16.9768421 C79.4905263,16.9768421 79.4021053,17.0652632 79.4021053,17.0652632 L41.4694737,54.8210526 C41.1157895,55.1747368 40.6736842,55.3515789 40.2315789,55.3515789 Z" id="Path"></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <p class="mt-4">You have successfully created a task!</p>
          <p>
            <button class="btn btn-outline-primary">
              Add another one</button>
          </p>
        </article>
      </div>
    </div>
  </div>
</div>

<!-- Delete task Modal -->
<div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="deleteTask" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title text-danger">Delete task?</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Coffee with Emily Employee</h5>
        <p>Welcome the starter with a cup of coffee and cool discussion abouth her role and expextations.</p>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete task Modal -->
<div class="modal fade" id="responsiveModal" tabindex="-1" role="dialog" aria-labelledby="responsiveModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fit-content" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Fit content modal</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close-o gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body vh-70 overflow-y-auto">
<div>Using your FOXID, log into Foxlink and&nbsp;complete the tasks listed below:<br><br>1. <strong>Complete&nbsp;Electronic W2 Consent</strong><br>Log into FoxLink -&gt; select the Employee tab and click "My Payroll/HR" -&gt; the Electronic W2 Consent will be located under the&nbsp;"Taxes" section.<br><img height="260" width="885" src="https://publicstorage.dc4.pageuppeople.com/777/ProviderAsset/scribble/679daae8-b6f7-49e3-8aa1-185595bb5682.png"><br>2. <strong>Complete Ethnicity Race Survey</strong><br>Log into FoxLink -&gt; select the Employee tab and&nbsp;click "Administration" -&gt; the Ethnicity Race Survey will be located under the "Ethnicity Race" section.<br><img height="338" width="538" src="https://publicstorage.dc4.pageuppeople.com/777/ProviderAsset/scribble/c9dad9cf-6259-48c1-bd79-f658e62008fb.png"><br>3. <strong>Register for the Rollins Alert System</strong><br>Log into FoxLink -&gt; select the Community tab -&gt; the Rollins Alert System will be located under the "Campus Safety" section.<br><img height="293" width="878" src="https://publicstorage.dc4.pageuppeople.com/777/ProviderAsset/scribble/5d7a19de-c744-418d-ad3c-357bb13ea830.png"><br>4. <strong>Review Public Directory Photo Options<br></strong>Would you like your R-Card photo to appear in the College's public directory? <br>Log into FoxLink -&gt; select the Employee tab and&nbsp;click "Administration" -&gt; the Public Directory Photo option will be located under the "Campus Directory" section.<br><img height="332" width="528" src="https://publicstorage.dc4.pageuppeople.com/777/ProviderAsset/scribble/448d67b0-4e8f-4c83-bbeb-a1536721b53a.png"><br>5. <strong>Birthdays!</strong><br>Want to know somebody's birthday? Check out the Birthdays! link.<br>Log into FoxLink -&gt; select the Community tab -&gt; the "Birthdays!" will be located under the "Campus Only Access" section.<br><img height="267" width="892" src="https://publicstorage.dc4.pageuppeople.com/777/ProviderAsset/scribble/d21cc98a-49f1-422d-b9f1-ddaff041e288.png"><br>For more information please visit: <a rel="noopener noreferrer" href="https://www.rollins.edu/it/accounts/foxlink.html">https://www.rollins.edu/it/accounts/foxlink</a>.</div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Action</button>
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
