<?php $parent = "hm"; include '../../base-t1.php';   ?>

<?php emptyblock('page-notification') ?>
<?php emptyblock('quick-nav') ?>

<?php startblock('page-title') ?>
Retail Customer Service office
<?php endblock() ?>
<?php startblock('page-tabs') ?>
<div class="page-tabs">
  <ul class="nav navbar-nav" >
    <li><a href="jc">Position details</a></li>
    <li class="active"><a href="cl">Applications</a></li>
    <li><a href="#">Notes</a></li>
    <li><a href="#">Documents</a></li>
    <li><a href="#">Sourcing</a></li>
  </ul>
</div>
<?php endblock() ?>
<?php startblock('page-body');?>
<table class="table table-hover responsive-table ">
  <thead>
    <tr>
      <th width="84" class="nowrap"></th>
      <th scope="col">Name</th>
      <th scope="col">Submitted</th>
      <th scope="col">Status</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Source</th>
      <th scope="col">Employee</th>
      <th scope="col">Flags</th>
      <th width="130" class="nowrap" scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php for ($x =1; $x <= 5; $x++) {?>
    <tr>
      <td>
        <div class="gel-buckets btn-group btn-group-xs" data-toggle="buttons">
          <label class="btn bucket-green">
            <input id="bucket-a-<?php echo($x)?>" name="bucket<?php echo($x)?>" value="1" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-orange">
            <input id="bucket-b-<?php echo($x)?>" name="bucket<?php echo($x)?>" value="2" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-red">
            <input id="bucket-c-<?php echo($x)?>" name="bucket<?php echo($x)?>" value="3" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
        </div>
      </td>
      <th scope="row"><a href="#"> Jane	Gaylor </a></th>
      <td data-title="Submitted"> 1 Nov 2017 </td>
      <td data-title="Status"><a href="#"> Interview 1</a></td>
      <td data-title="Email">jgaylor@company.com.au	</td>
      <td data-title="Mobile"> 0451598632 </td>
      <td data-title="Source"> Seek </td>
      <td data-title="Employee"> Yes </td>
      <td data-title="Flags">
        <i class="fa fa-plane yellow" aria-hitden="true"></i>
        <i class="fa fa-flag green"></i>
        <i class="fa fa-phone red"></i>
        <i class="fa fa-trophy purple"></i>
      </td>
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
        <div class="gel-buckets btn-group btn-group-xs" data-toggle="buttons">
          <label class="btn bucket-green">
            <input id="bucket4" name="bucket2" value="1" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-orange">
            <input id="bucket5" name="bucket2" value="2" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-red">
            <input id="bucket6" name="bucket2" value="3" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
        </div>
      </td>
      <th scope="row"><a href="#"> Karin	Takeuchi </a></th>
      <td data-title="Submitted"> 3 Nov 2017 </td>
      <td data-title="Status"><a href="#"> Application Withdrawn </a></td>
      <td data-title="Email">Karin.Takeuchi@company.com</td>
      <td data-title="Mobile"> +93790320438 </td>
      <td data-title="Source"> Referral	 </td>
      <td data-title="Employee"> Yes </td>
      <td data-title="Flags">
        <i class="fa fa-plane yellow" aria-hitden="true"></i>
        <i class="fa fa-flag green"></i>
        <i class="fa fa-phone red"></i>
        <i class="fa fa-trophy purple"></i>
      </td>
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
        <div class="gel-buckets btn-group btn-group-xs" data-toggle="buttons">
          <label class="btn bucket-green">
            <input id="bucket4" name="bucket2" value="1" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-orange">
            <input id="bucket5" name="bucket2" value="2" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-red">
            <input id="bucket6" name="bucket2" value="3" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
        </div>
      </td>
      <th scope="row"><a href="#"> Peter Gallisa </a></th>
      <td data-title="Submitted"> 5 Nov 2017 </td>
      <td data-title="Status"><a href="#"> Screening </a></td>
      <td data-title="Email">peter.gallisa@hotmail.com</td>
      <td data-title="Mobile"> +8613991181213 </td>
      <td data-title="Source"> Referral	 </td>
      <td data-title="Employee"> No </td>
      <td data-title="Flags">
        <i class="fa fa-trophy purple"></i>
        <i class="fa fa-phone red"></i>
        <i class="fa fa-plane yellow" aria-hitden="true"></i>
        <i class="fa fa-flag green"></i>
      </td>
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
        <div class="gel-buckets btn-group btn-group-xs" data-toggle="buttons">
          <label class="btn bucket-green">
            <input id="bucket4" name="bucket2" value="1" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-orange">
            <input id="bucket5" name="bucket2" value="2" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
          <label class="btn bucket-red">
            <input id="bucket6" name="bucket2" value="3" type="radio">
            <i aria-hidden="true" class="fa fa-circle"></i>
          </label>
        </div>
      </td>
      <th scope="row"><a href="#"> Sureinia Arulananda </a></th>
      <td data-title="Submitted"> 5 Nov 2017 </td>
      <td data-title="Status"><a href="#"> Screening </a></td>
      <td data-title="Email">Sureinia.Arulananda@hotmail.com</td>
      <td data-title="Mobile"> +164264214234 </td>
      <td data-title="Source"> Referral	 </td>
      <td data-title="Employee"> No </td>
      <td data-title="Flags">
        <i class="fa fa-trophy purple"></i>
        <i class="fa fa-phone red"></i>
        <i class="fa fa-plane yellow" aria-hitden="true"></i>
        <i class="fa fa-flag green"></i>
      </td>
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
    <?php }?>
  </tbody>
</table>
<?php endblock() ?>
