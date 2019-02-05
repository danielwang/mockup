<?php $pageTitle = "My Jobs"; $pageLayout="-fluid"; $parent = "hm"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>

<section class="row" role="search filter">
  <div class="col-md-6 col-lg-5 col-xl-4 mb-md-3">
    <h5>Visibility</h5>
    <fieldset>
      <legend class="sr-only">visibility</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-v" id="option1" autocomplete="off" checked="checked">
          <span class="btn btn-ctrl" title="My jobs">
            My jobs
          </span>
        </label>
        <label>
          <input type="radio" name="options-v" id="option2" autocomplete="off">
          <span class="btn btn-ctrl" title="Team jobs">
            Team jobs
          </span>
        </label>
        <label>
          <input type="radio" name="options-v" id="option3" autocomplete="off">
          <span class="btn btn-ctrl" title="All jobs">
            All jobs
          </span>
        </label>
      </div>
    </fieldset>
  </div>
  <div class="col-md-6 col-lg-5 col-xl-4">
    <h5 class="mt-2 mt-md-0">Status</h5>
    <fieldset>
      <legend class="sr-only">Status</legend>
      <div class="btn-group btn-group-toggle segmented-control">
        <label>
          <input type="radio" name="options-seg-status" id="option1" autocomplete="off" checked="checked">
          <span class="btn btn-ctrl" title="Current">
            Current
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg-status" id="option2" autocomplete="off">
          <span class="btn btn-ctrl" title="Archived">
            Archived
          </span>
        </label>
        <label>
          <input type="radio" name="options-seg-status" id="option3" autocomplete="off">
          <span class="btn btn-ctrl" title="All">
            All
          </span>
        </label>
      </div>
    </fieldset>
  </div>
</section>
<div class="table-ctrl d-flex justify-content-between align-items-center mt-3">
  <span>55 results</span>
  <div role="Controls of the table">
    <button class="btn btn-ctrl btn-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i aria-hidden="true" class="gel-icon-settings gel-icon-xs"></i> Settings </button>
    <div class="scroller btn-group ml-2" aria-label="Scroller">
      <button type="button" class="btn btn-ctrl btn-sm scroller-left-btn disabled" data-toggle="tooltip" data-placement="left" data-original-title="Scroll to left">
        <i class="gel-icon-arrow-left gel-icon-xs" aria-hidden="true"></i>
        <span class="sr-only">Scroll left</span>
      </button>
      <button type="button" class="btn btn-ctrl btn-sm scroller-right-btn disabled" data-toggle="tooltip" data-placement="right" data-original-title="Scroll to right">
        <i class="gel-icon-arrow-right gel-icon-xs" aria-hidden="true"></i>
        <span class="sr-only">Scroll right</span>
      </button>
    </div>
  </div>
</div>
<div data-control="scroller-wrapper" class="table-responsive">
  <table data-control="scroller-content" class="table table-striped table-hover mt-3">
      <caption class="sr-only">List of jobs</caption>
      <thead class="thead-dark thead-sortable">
        <tr>
          <th scope="col"><a href="#" aria-label="sorting by Job ID">Job ID</a></th>
          <th scope="col"><a href="#" aria-label="sorting by Job Title">Job Title</a></th>
          <th scope="col"><a href="#" aria-label="sorting by Recruiter">Recruiter</a>
          </th>
          <th scope="col"><a href="#" aria-label="sorting by Status">Status</a>
          </th>
          <th scope="col" class="sorted"><a href="#" class="sort-up" aria-label="sorting by Opening date">Opening date </a></th>
          <th scope="col"><a href="#" aria-label="sorting by Closing date">Closing date </a></th>
          <th scope="col" class="disabled"><span class="sr-only">Action</span></th>
        </tr>
      </thead>
      <tbody>
        <?php for ($x =1; $x <= 11; $x++) {?>
        <tr class="clickable">
          <th scope="row"><a href="job-card">International Consultant on Early Childhood Development</a></th>
          <td data-title="Job ID">
            <?php echo $x * 2  + 53302042 ?>
          </td>
          <td data-title="Recruiter">Peter Smith</td>
          <td data-title="Status">
            Offer Made
          </td>
          <td data-title="Opening date">Jul 14, 2017</td>
          <td data-title="Closing date">Jan 23, 2018</td>
          <td scope="row" class="text-center">
            <a class="d-none d-md-block" aria-label="View application" href="job-card"> View <i aria-hidden="true" class="gel-icon-angle-right gel-icon-sm"></i></a>
            <a class="btn btn-primary btn-block d-md-none" href="job-card"> View </a>
          </td>
        </tr>
        <tr class="clickable">
          <th scope="row"><a href="job-card">Retail Customer Service Officer </a></th>
          <td data-title="Job ID">
            <?php echo $x + 53302042 ?>
          </td>
          <td data-title="Recruiter"> Arnold Schwarzenegger </td>
          <td data-title="Status">
            Approved to advertise
          </td>
          <td data-title="Opening date">Jul 14, 2017</td>
          <td data-title="Closing date">Jan 23, 2018</td>
          <td scope="row" class="text-center">
            <a class="d-none d-md-block text-nowrap" aria-label="View application" href="job-card"> View <i aria-hidden="true" class="gel-icon-angle-right gel-icon-sm"></i></a>
            <a class="btn btn-primary btn-block d-md-none" href="job-card"> View </a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
</div>
<nav aria-label="Search results pages" class="row">
  <span class="text-muted text-sm mb-2 col-md-6 order-md-1 col-lg-2 col-xl-3 d-flex align-items-center">Showing 121 - 140 of 175 results</span>
  <ul class="order-md-3 order-lg-2 col-lg-6 col-xl-6 mb-2 pagination justify-content-center" role="pagination">
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="left" data-original-title="First" ><i aria-hidden="true" class="gel-icon-left-end gel-icon-xs"></i><span class="sr-only">First</span></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Previous" ><i aria-hidden="true" class="gel-icon-angle-left gel-icon-xs"></i><span class="sr-only">Previous</span></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">6
        <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">7</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">8</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Next"><i aria-hidden="true" class="gel-icon-angle-right gel-icon-xs"></i><span class="sr-only">Next</span></a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" data-toggle="tooltip" data-placement="right" data-original-title="Last" ><i aria-hidden="true" class="gel-icon-right-end gel-icon-xs"></i><span class="sr-only">Last</span></a>
    </li>
  </ul>
  <div class="col-md-6 order-md-2 order-lg-3 col-lg-4 col-xl-3 justify-content-end d-flex align-items-center mb-2">
    <span class="text-muted text-sm mr-2">
      Page 6 of 8 | Jump to page
    </span>
    <div class="d-inline-flex input-group input-group-sm w-auto">
      <input style="width:45px" type="number" min="1" max="8" class="form-control border-0" aria-label="Jump to page">
      <div class="input-group-append">
        <button class="btn btn-light" type="button">Go</button>
      </div>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Settings</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="gel-icon-close gel-icon-lg"></span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead">Select the columns you wish to add/remove</p>
        <form>
          <div class="form-group">
            <label for="group1">Columns</label>
            <div class="d-flex flex-wrap">
                <?php $c=1; for ($i =1; $i <= 15; $i++) {?>
                  <div class="w-50">
                    <div class="checkbox checkbox-default">
                      <input type="checkbox" checked id="<?php echo $c . '-' .$i ?>">
                      <label for="<?php echo $c . '-' . $i ?>">
                        Column <?php echo $c . '-' . $i ?>
                      </label>
                    </div>
                  </div>
                <?php } ?>
            </div>
          </div>
          <div class="form-group">
          <label for="who1">Number of rows on the page</label>
          <div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
              <label for="inlineRadio1">
                20
              </label>
            </div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
              <label for="inlineRadio2">
                50
              </label>
            </div>
            <div class="radio radio-default radio-inline">
              <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
              <label for="inlineRadio3">
                100
              </label>
            </div>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary mr-auto" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
<?php endblock()?>
