<?php $pageTitle = "Error"; $pageLayout="container-max"; include '../base-t2.php';?>

<?php startblock('jumbotron');?>
<div class="error-page">
  <div class="row">
    <div class="col-sm-7 d-flex align-items-center order-2 order-sm-1">
      <section>
        <h1 class="display-1">500
        </h1>
        <h1>Our bad, this makes us very sad</h2>
        <p>Our technical team has been advised of the situation. Maybe try refreshing the page later.</p>
        <dl class="row mt-5">
          <span class="col-6 col-xl-7">
            <dt class="text-sm">Date and time</dt>
            <dd>4 Mar 2019, 9:34am UTC+11:00</dd>
          </span>
          <span class="col-6 col-xl-5">
            <dt class="text-sm">Reference</dt>
            <dd>12456384</dd>
          </span>
        </dl>
        <p>
          <a href="#" class="btn btn-outline-primary">Contact Us</a>
        </p>
      </section>
    </div>
    <div class="col-sm-5 order-1">
        <img class="img-fluid error-image" src="https://ui.pageuppeople.com/gel/images/illustrations/error.svg" title="error page">
    </div>
  </div>
</div>
<?php endblock()?>
<?php startblock('page-body')?>
<hr class="mb-5"/>
<h3>Exception</h3>
<p>System.IndexOutOfRangeException: Index 0 is either negative or above rows count.<br />
at System.Data.DataView.GetRow(Int32 index)<br />
at System.Data.DataView.get_Item(Int32 recordIndex)<br />
at PageUp.DB.TableAccess.GetField(String strFieldName) in C:\repos\pageup\Assemblies\DB\TableAccess.cs:line 342<br />
at PageUp.DB.TableAccess.GetFieldObject(String strFieldName, Object objDefault) in C:\repos\pageup\Assemblies\DB\TableAccess.cs:line 401<br />
at PageUp.DB.TableAccess.GetFieldInt(String strFieldName) in C:\repos\pageup\Assemblies\DB\TableAccess.cs:line 369<br />
at PageUp.BusinessLayer.ApplicantCardBL.GetAppCardData(Int32 applicantId, Int32 applicationId, Int32 pageSize, Boolean shouldFilterNotes, Boolean isGridInvalid, String checkBoxes, Nullable`1 guid, Boolean isPUAdmin) in C:\Repos\pageup\Assemblies\PageUp.BusinessLayer\ApplicantCardBL.cs:line 145<br />
at PageUp.People.Admin.Controllers.ApplicantController.Index(Int32 lApplicantId, Nullable`1 sGuid, Int32 lApplicationId, Boolean bGridInvalid, Int32 lDocumentId, Boolean stripHtml, Boolean printable, String sCheckBoxes, Boolean bFilterNotes) in C:\Repos\pageup\WebSites\PageUpPeople\Controllers\ApplicantController.cs:line 261<br />
at lambda_method(Closure , ControllerBase , Object[] )</p>
<?php endblock()?>
