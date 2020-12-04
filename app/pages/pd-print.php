<?php $blokk = false;  $pageTitle = "Print document"; $pageAction = true; $pageLayout="-max container"; $parent = "adm"; include '../base-t2.php';?>

<?php startblock('page-actions') ?>

<?php endblock() ?>

<?php startblock('page-body');?>
<div class="text-right d-print-none mb-4">
    <button class="btn btn-primary" onclick="javascript: window.print();">Print</button>
</div>
<article class="card p-5">
    <h1 class="display-4">Senior Research Officer (Science Faculty) <mark aria-hidden="true" class="badge badge-success watermark">Approved</mark></h1>
    <p class="mb-5">Version 3 approved 18 April 2020</p>
    
    <section class="mb-5">
        <h2>Incumbent</h2>
        <span>Peter Parker</span>
    </section>

    <section class="mb-5">
        <h2>Position Details</h2>
        <div class="row mb-0">
            <span class="col-md-6 mb-3">
                <strong class="d-block">Department</strong>
                <span>Technical Education</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Immediate Supervisor</strong>
                <span>Assigned Department Chair</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Salary</strong>
               <span>Level 3, $40,000 – $55,000</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">FLSA</strong>
               <span>Exempt</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Scheduled Appointment Type</strong>
               <span>Full Time </span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Work Schedule</strong>
               <span>9 month position</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Employee Retirement System</strong>
               <span>PSRS position</span>
            </span>
            <span class="col-md-12 mb-3">
                <strong class="d-block">Aspanitional Schedule Details:</strong>
               <span>Responsible for 15 credit hours of instruction per fall and spring semester.  Allowed to teach two classes for overload per semester.  Over two classes requires approval of Dean and Provost.</span>
            </span>
            <span class="col-md-12">
                <strong class="d-block">Position Summary:</strong>
               <span>The instructor is responsible for developing and implementing the daily lesson plans and activities for the assigned classes.  The instructor is also responsible for creating a classroom environment that implements best practices, supports industry standards, and engages students in career and technical education3.</span>
            </span>
        </div>    
    </section> 
    
    <section class="mb-5">
        <h2>Essential Job Duties:</h2>
        *	Maintain and assume responsibility for the assigned classroom environment.
        <br> *	Develop and implement daily lesson plans that follow approved curriculum, support industry standards, and are aligned with appropriate assessments.
        <br> *	Actively engage and interact with students using intentional best practice teaching strategies.
        <br> *	Plan and prepare the learning environment with needed materials and supplies.
        <br> *	Develop a course syllabus for each class taught and provide a copy to students and 
            department chair at the beginning of the semester.
        <br> *	Maintain appropriate record keeping for assigned classes to include student attendance, record of grades earned, and other related classroom information.
        <br> *	Maintain minimum contact hour teaching assignment as provided by college policy.
        <br> *	Schedules and keep a minimum of five office hours per week convenient to students.
        <br> *	Demonstrates professional conduct, positive attitude, and supportive culture.  
        <br> *	Effectively collaborate with colleagues and industry partners to build positive relationships 	within the OTC environment and the community.
        <br> *	Assist with curriculum development and modification of programs to align curriculum with 	industry-based demands, accreditation and certification requirements, and program operation, 	as necessary.
        <br> *	Participate in departmental, division, committee, college meetings and decisions. 
        <br> *	Maintain confidentiality of students, parents/guardians, and fellow staff members, as well as 	records and all information.
    </section>

    <section class="mb-5">
        <h2>Responsibilities:</h2>
        *	Assist in aspanressing student concerns regarding advisement, placement, and course 	difficulties.
        <br> *	Works with program advisory committees; serve as partners with local industry.
        <br> *	Facilitate student recruitment; assist in the promotion of programs.
        <br> *	Complete professional development training hours and maintain appropriate professional 	certification, as necessary.
        <br> *	Participate in professional organizations, as appropriate. 
        <br> *	Communicates effectively with departmental faculty by responding to emails within 48 hours.
        <br> *	Assist with textbook adoption process.
        <br> *	Sponsors student clubs and/or organizations, as appropriate.
        <br> *	Exhibit exemplary attendance and punctuality. 
        <br> *	Comply with college policies and procedures.
        <br> *	Perform other duties as assigned, including attending college functions (e.g., commencement).  
        <br> *	Serve on committees as requested.
        <br> *	Attend community/professional events as requested.
        <br> *	Perform assigned responsibilities, duties, and tasks according to established practices, 	procedures, techniques, and standards in a safe manner and with minimal supervision.
    </section>

    <section class="mb-5">
        <h2>Background Checks</h2>
        <div class="row mb-0">
            <span class="col-md-6 mb-3">
                <strong class="d-block">Standard background check</strong>
                <span>YES</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Drug screen</strong>
                <span>Nothing selected</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">MVR</strong>
                <span>NO</span>
            </span>
            <span class="col-md-6 mb-3">
                <strong class="d-block">Physical</strong>
               <span>YES</span>
            </span>
        </div>    
    </section> 
    <?php for ($r=0; $r <= 10; $r++) {?> 
        <section class="mb-5">
            <h2>Section</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </section>
    <?php } ?>      
</article>

<?php endblock()?>

<style>
#gel-navbar, #gel-header{
    display:none;
}
</style>

<style>
/* *************************************** *\
 *  The styling for Print
\* *************************************** */
@media print {
 
    article.card{
        border: 0;
    }

    .watermark{
      display: block;
      position: fixed;
      text-transform:uppercase;
      top: 30%;
      right: 100px;
      opacity: 0.25;
      z-index: 99;
      font-size:10rem;
      color: #D6DDE4;
      /* Rotate div */
      -ms-transform: rotate(-45deg); /* IE 9 */
      -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
      transform: rotate(-45deg);
    }
}


</style>