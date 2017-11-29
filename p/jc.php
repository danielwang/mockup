<?php $parent = "hm"; include '../base-t1.php';   ?>

<?php emptyblock('page-notification') ?>
<?php emptyblock('quick-nav') ?>

<?php startblock('page-title') ?>
Retail Customer Service office
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<div class="page-tabs">
  <ul class="nav navbar-nav" >
    <li class="active"><a href="jc">Position details</a></li>
    <li><a href="cl">Applications</a></li>
    <li><a href="#">Notes</a></li>
    <li><a href="#">Documents</a></li>
    <li><a href="#">Sourcing</a></li>
  </ul>
</div>
<?php endblock() ?>
<?php emptyblock('page-search') ?>
<?php startblock('page-body');?>
<div class="row">
  <div class="col-sm-4">
    <div id="gel-pagenav" class="sidenav toc hidden-xs hidden-sm" data-spy="affix" data-offset-top="180">
        <ul class="nav">
          <li>
            <a data-triger="anchor" href="#anchor-1">Job role</a>
          </li>
          <li>
            <a data-triger="anchor" href="#anchor-2">Headcount management</a>
          </li>
          <li>
            <a data-triger="anchor" href="#anchor-3">Position details</a>
          </li>
          <li>
            <a data-triger="anchor" href="#anchor-4">Skill and knowledge</a>
          </li>
          <li>
            <a data-triger="anchor" href="#anchor-5">Employee referral</a>
          </li>
          <li>
            <a data-triger="anchor" href="#anchor-6">Approvals</a>
          </li>
        </ul>
      </div>
  </div>
  <div class="col-sm-8">
    <div class="gel-box">
      <h4 id="anchor-1" data-attr="anchor" class="text-info margin-top-none">Job Role</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="title" class="control-label required">Job title</label>
            <input id="title" class="form-control" type="text"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Job No.</label>
            <input class="form-control" type="text"/>
            <small class="help-block gray">Leave blank to automatically create a reference No.</small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="mgr" class="control-label">Reports to manager name:</label>
            <input id="mgr" class="form-control" type="text"/>
          </div>
        </div>
      </div>
      <h4 id="anchor-2" data-attr="anchor" class="text-info">Headcount Management</h4>
      <h6>Positions</h6>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">New</label>
            <div class="input-group">
              <input class="form-control" type="number">
              <span class="input-group-btn">
                <button class="btn" type="button">
                  Add
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Replacement</label>
            <div class="input-group">
              <input class="form-control" type="number">
              <span class="input-group-btn">
                <button class="btn" type="button">
                  Add
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Date Opened</label>
            <div class="input-group">
              <input class="form-control" type="text">
              <span class="input-group-btn">
                <button class="btn" type="button">
                  <i class="fa fa-calendar"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Date Needed</label>
            <div class="input-group">
              <input class="form-control" type="text">
              <span class="input-group-btn">
                <button class="btn" type="button">
                  <i class="fa fa-calendar"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label">Date Filled</label>
            <div class="input-group">
              <input class="form-control" type="text">
              <span class="input-group-btn">
                <button class="btn" type="button">
                  <i class="fa fa-calendar"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-responsive table-striped table-hover">
          <thead>
            <tr>
              <th>Column 1
              </th>
              <th>Column 2</th>
              <th>Type</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <input class="form-control input-sm" placeholder="placehoder ..." type="text">
              </td>
              <td>
                <select class="form-control input-sm">
                  <option value="">Select</option>
                </select>
              </td>
              <td>
                Type 0
              </td>
              <td>
                Status 0</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">Edit</button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                  </button>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input class="form-control input-sm" placeholder="placehoder ..." type="text">
              </td>
              <td>
                <select class="form-control input-sm">
                  <option value="">Select</option>
                </select>
              </td>
              <td>
                Type 1
              </td>
              <td>
                Status 1</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">Edit</button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                  </button>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input class="form-control input-sm" placeholder="placehoder ..." type="text">
              </td>
              <td>
                <select class="form-control input-sm">
                  <option value="">Select</option>
                </select>
              </td>
              <td>
                Type 2
              </td>
              <td>
                Status 2</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">Edit</button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                  </button>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input class="form-control input-sm" placeholder="placehoder ..." type="text">
              </td>
              <td>
                <select class="form-control input-sm">
                  <option value="">Select</option>
                </select>
              </td>
              <td>
                Type 3
              </td>
              <td>
                Status 3</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">Edit</button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                  </button>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <input class="form-control input-sm" placeholder="placehoder ..." type="text">
              </td>
              <td>
                <select class="form-control input-sm">
                  <option value="">Select</option>
                </select>
              </td>
              <td>
                Type 4
              </td>
              <td>
                Status 4</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">Edit</button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                  </button>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                      <li>
                        <a href="#">Dropdown link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h4 id="anchor-3" data-attr="anchor" class="text-info">Position Details</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label required">Business Unit</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group required">
            <label class="control-label">Department</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Employment type</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Pay scale</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <label class="control-label">Ad description</label>
      <script type="text/javascript" src="https://ui.pageuppeople.com/libs/scribble/scribble.js" charset="UTF-8" async></script>
      <textarea style="visibility: hidden;" pageup-scribble></textarea>
      <p></p>
      <div class="form-group">
        <label class="control-label">Position documents upload</label>
        <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
        <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
        <!-- Change /upload-target to your upload address -->
        <form action="/upload-target" class="dropzone gel-dropzone needsclick dz-clickable">
          <div class="dz-message needsclick gray">
            <div class="text-center">
              <i class="gel-icon gel-icon-upload-cloud gel-icon-4x"></i>
            </div>
            <h3 class="gray">Drag &amp; Drop files here</h3>
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
      <h4 id="anchor-4" data-attr="anchor" class="text-info">Skill and knowledge</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="control-label">Relevant Experience and/or Qualifications</label>
            <textarea class="form-control"></textarea>
          </div>
        </div>
      </div>
      <h4 id="anchor-5" data-attr="anchor" class="text-info">Employee referral</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label required">Referral category</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Referral amount</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>
              <input class="form-control" id="exampleInputAmount" placeholder="Amount" type="text">
              <div class="input-group-addon">.00</div>
            </div>
          </div>
        </div>
      </div>
      <h4 id="anchor-6" data-attr="anchor" class="text-info">Approvals</h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label required">Approval process</label>
            <div class="select">
              <select class="form-control">
                <option>Option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="control-label">Recruiter</label>
            <input class="form-control" type="text">
          </div>
        </div>
      </div>
      <div class="checkbox checkbox-info">
        <input value="option1" id="inlineCheckbox4" class="styled" type="checkbox" checked/>
        <label for="inlineCheckbox4">
          Save a copy of this job as a template
        </label>
      </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer-sticky">
  <section class="container">
    <div class="row">
      <div class="col-xs-4">
        <button class="btn btn-default">
          Cancel
        </button>
      </div>
      <div class="col-xs-8 text-right">
        <button class="btn btn-primary">
          Save
        </button>
      </div>
    </div>
  </section>
</footer>
<?php endblock()?>
