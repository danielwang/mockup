<?php $blokk = false; $parent = "adm"; $pageAction = true; $pageLayout="-fluid"; $pageTitle = "Position Description Library"; include '../base-t3.php';?>

<?php startblock('page-actions') ?>
<span class="item">
    <button class="btn btn-primary">Create</button>
</span>
<?php endblock()?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<h4>Recent Items</h4>
<div class="border-bottom mb-5 mx-n-3 px-3">
    <?php include "partials/_thumbnails.html" ?>
</div>  
<div class="container">
  <div class="table-responsive">
        <div class="d-flex justify-content-end mb-2 p-1">
            <div class="btn-group btn-group-toggle segmented-control">
                <label>
                    <input type="radio" name="options-seg-status" id="option1" checked="checked">
                    <span class="btn btn-ctrl" title="Current"><i class="gel-icon-logo"></i></span>
                </label>
                <label>
                    <input type="radio" name="options-seg-status" id="option2">
                    <span class="btn btn-ctrl" title="Archived">
                        <i class="gel-icon-logo"></i>
                    </span>
                </label>
            </div>
        </div>
        <table class="table table-striped table-hover">
        <caption class="sr-only">List of jobs</caption>
        <thead class="thead-dark thead-sortable">
            <tr><th scope="col"><a href="#" aria-label="sorting by Job ID">Position Description Title</a></th>
            <th scope="col"><a href="#" aria-label="sorting by Job Title">Job
                Title</a></th>
            <th scope="col"><a href="#" aria-label="sorting by Recruiter">Recruiter</a></th>
            <th scope="col"><a href="#" aria-label="sorting by Status">Status</a></th>
            <th scope="col" class="sorted"><a href="#" aria-label="sorting by
                Opening date" class="sort-up">Opening date </a></th>
            <th scope="col"><a href="#" aria-label="sorting by Closing date">Closing
                date </a></th>
            <th scope="col" class="disabled"><span class="sr-only">Action</span></th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i =1; $i <= 5; $i++) {?>
            <tr class="clickable"><th scope="row"><a href="job-card">Senior
                Developer</a></th><td data-title="Job ID">
                53302044 </td><td data-title="Recruiter">Peter Smith</td><td
                data-title="Status">
                Offer Made
            </td><td data-title="Opening date">Jul 14, 2017</td><td
                data-title="Closing date">Jan 23, 2018</td><td scope="row"
                class="text-center"><a aria-label="View application" href="job-card"
                class="d-none d-md-block"> View <i aria-hidden="true"
                    class="gel-icon-angle-right gel-icon-sm"></i></a><a
                href="job-card" class="btn btn-primary btn-block d-md-none"> View
                </a></td></tr><tr class="clickable"><th scope="row"><a
                href="job-card">Retail Customer Service Officer </a></th><td
                data-title="Job ID">
                53302043 </td><td data-title="Recruiter"> Arnold Schwarzenegger
            </td><td data-title="Status">
                Approved to advertise
            </td><td data-title="Opening date">Jul 14, 2017</td><td
                data-title="Closing date">Jan 23, 2018</td><td scope="row"
                class="text-center"><a aria-label="View application" href="job-card"
                class="d-none d-md-block text-nowrap"> View <i aria-hidden="true"
                    class="gel-icon-angle-right gel-icon-sm"></i></a><a
                href="job-card" class="btn btn-primary btn-block d-md-none"> View
                </a></td></tr><tr class="clickable"><th scope="row"><a
                href="job-card">International Consultant on Early Childhood
                Development</a></th><td data-title="Job ID">
                53302046 </td><td data-title="Recruiter">Peter Smith</td><td
                data-title="Status">
                Offer Made
            </td><td data-title="Opening date">Jul 14, 2017</td><td
                data-title="Closing date">Jan 23, 2018</td><td scope="row"
                class="text-center"><a aria-label="View application" href="job-card"
                class="d-none d-md-block"> View <i aria-hidden="true"
                    class="gel-icon-angle-right gel-icon-sm"></i></a><a
                href="job-card" class="btn btn-primary btn-block d-md-none"> View
                </a></td></tr><tr class="clickable"><th scope="row"><a
                href="job-card">Retail Customer Service Officer </a></th><td
                data-title="Job ID">
                53302044 </td><td data-title="Recruiter"> Arnold Schwarzenegger
            </td><td data-title="Status">
                Approved to advertise
            </td><td data-title="Opening date">Jul 14, 2017</td><td
                data-title="Closing date">Jan 23, 2018</td><td scope="row"
                class="text-center"><a aria-label="View application" href="job-card"
                class="d-none d-md-block text-nowrap"> View <i aria-hidden="true"
                    class="gel-icon-angle-right gel-icon-sm"></i></a><a
                href="job-card" class="btn btn-primary btn-block d-md-none"> View
                </a></td></tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
    <nav aria-label="Search results pages" class="d-flex justify-content-center"><ul role="pagination" class="pagination"><li class="page-item active"><a href="#" class="page-link">1
            <span class="sr-only">(current)</span></a></li><li class="page-item"><a href="#" class="page-link">2</a></li><li class="page-item"><a href="#" class="page-link">3</a></li></ul></nav>
</div>                

<?php endblock()?>
