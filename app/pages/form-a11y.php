<?php $blokk = false; $parent = "hm"; $pageTitle = "Form A11Y"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<fieldset class="w-50 card" id="section1">
    <h3 class="form-section-title">Job Requisition Information</h3>
    <div class="form-group">
        <label for="s1">Recruitment Reason:</label>
        <div class="select">
            <select class="form-control" id="s1">
                <option>Reason 1</option>
                <option>Reason 2</option>
                <option>Reason 3</option>
                <option>Reason 4</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label for="r1">Job Family Framework Project Submission:</label>
        <fieldset id="r1">
            <legend class="sr-only">Job Family Framework Project Submission:</legend>
            <div class="radio radio-primary">
                <input type="radio" id="inlineRadio1" value="option1"
                    name="radioInline1">
                <label for="inlineRadio1">Yes</label>
            </div>
            <div class="radio radio-primary">
                <input type="radio" id="inlineRadio2" value="option2"
                    name="radioInline1" checked>
                <label for="inlineRadio2">No</label>
            </div>
        </fieldset>
    </div>
    <div class="form-group">
        <label for="title" class="required">Requisition
            No.:</label>
        <div class="">
            <input id="title" class="form-control" type="text" placeholder="" aria-describedby="helpinfo" required/>
            <small id="helpinfo" class="form-text text-muted"> Leave blank to
                automatically create a reference No.</small>
        </div>
    </div>
    <div class="form-group">
        <label for="title2" required">Posting Title:</label>
        <div class="">
            <input id="title2" class="form-control" type="text" value="" required />
        </div>
    </div>

    <fieldset class=" form-group"><legend class="sr-only">Physical Demand</legend><label>Physical Demand</label><div class="row" id="root_physicalDemands_demands"><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_0" type="checkbox" checked=""><label for="checkbox-root_physicalDemands_demands_0">Bending</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_1" type="checkbox"><label for="checkbox-root_physicalDemands_demands_1">Carrying</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_2" type="checkbox"><label for="checkbox-root_physicalDemands_demands_2">Climbing</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_3" type="checkbox" checked=""><label for="checkbox-root_physicalDemands_demands_3">Crawling</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_4" type="checkbox"><label for="checkbox-root_physicalDemands_demands_4">Driving</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_12" type="checkbox" checked=""><label for="checkbox-root_physicalDemands_demands_12">Standing</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_13" type="checkbox"><label for="checkbox-root_physicalDemands_demands_13">Twisting</label></div></div><div class="col-md-4"><div class="checkbox checkbox-default"><input id="checkbox-root_physicalDemands_demands_14" type="checkbox" checked=""><label for="checkbox-root_physicalDemands_demands_14">Walking</label></div></div></div></fieldset>
</fieldset>

<fieldset class="w-50 card mt-4" id="section2">
    <h3 class="form-section-title">Job Requisition Information</h3>
    <div class="form-group">
        <label>Recruitment Reason:</label>
        <div class="select">
            <select class="form-control">
                <option>Reason 1</option>
                <option>Reason 2</option>
                <option>Reason 3</option>
                <option>Reason 4</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label>Job Family Framework Project Submission:</label>
        <fieldset>
            <div class="radio radio-primary">
                <input type="radio" id="inlineRadio1-2" value="option1"
                    name="radioInline1-2">
                <label>Yes</label>
            </div>
            <div class="radio radio-primary">
                <input type="radio" id="inlineRadio2-2" value="option2"
                    name="radioInline1-2">
                <label>No</label>
            </div>
        </fieldset>
    </div>
    <div class="form-group">
        <label class="required">Requisition No.:</label>
        <div class="">
            <input class="form-control" type="text" placeholder="" />
            <small class="form-text text-muted"> Leave blank to
                automatically create a reference No.</small>
        </div>
    </div>
    <div class="form-group">
        <label>Posting Title:</label>
        <div >
            <input class="form-control" type="text" value=""/>
        </div>
    </div>
</fieldset>



<?php endblock()?>
