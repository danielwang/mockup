<?php $pageTitle = "Iconography"; $parent = "hm"; include '../base-ui.php';?>

<?php

function buildSolidIcons(){
  return  [
    ["print", "print"],
    ["feedback", "feedback"],
    ["help", "help-pointer"],
    ["info", "info-pointer"],
    ["beta", "beta"],
    ["search", "search"],
    ["bullhorn", "bullhorn"],
    ["right", "right"],
    ["left", "left"],
    ["upload", "upload"],
    ["download", "download"],
    ["dropdown", "dropdown"],
    ["foldup", "foldup"],
    ["share", "share"],
    ["tick", "tick-circle"],
    ["close", "close-circle"],
    ["trash", "trash"],
    ["notes", "notes"],
    ["new", "new"],
    ["eye", "eye"],
    ["logo", "logo"],
    ["user", "user"],
    ["job", "job"],
    ["knowledge portal", "knowledge-portal"],
    ["refresh", "refresh"],
    ["lock", "lock"],
    ["analytics", "analytics"],
    ["menu", "menu"],
    ["support", "support"],
    ["employee", "employee"],
    ["add-user", "add-user"],
    ["preview", "preview"],
    ["copy", "copy"],
    ["close", "close"],
    ["tick", "tick"],
    ["help", "help"],
    ["settings", "settings"], //new
    ["folder", "folder"],
    ["image","image"],
    ["bookmark","bookmark"],
    ["chat","chat"],
    ["compensation","compensation"],
    ["drag","drag"],
    ["pencil","pencil"],
    ["history","history"],
    ["home","home"],
    ["location","location"],
    ["add","add"],
    ["plus","plus"],
    ["tag","tag"],
    ["view","view"],
    ["resume","resume"],
    ["slack","slack"],
    ["github","github"],
    ["edit","edit"]
  ];
}

$solidIcons = buildSolidIcons();

function buildLineIcons(){
  return  [
    ["logo", "logo"],["menu","menu"],["close","close"],["beta","beta"],["bullhorn","bullhorn"],["print","print"],
    ["feedback","feedback"],["support","support"],["profile","profile"],["search","search"],["applicant","applicant"],
    ["control","control"],["team","team"],["job","job"],["employee","employee"],
    ["recruitment","recruitment"],["learning","learning"],["analytics","analytics"],["orgchart","orgchart"],
    ["onboarding","onboarding"],["journal","journal"],["copy","copy"],["history","history"],["salary","salary"],
    ["add","add"],["unlock","unlock"],["view","view"],["resume","application"]
  ];
}

$lineIcons = buildLineIcons();

?>

<?php startblock('page-tabs') ?>
  <!-- Nav tabs -->
    <li class="nav-item">
      <a class="nav-link active" id="icons-tab" data-toggle="tab" href="#icons" role="tab" aria-controls="icons" aria-selected="true">Icons library</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false">How to use</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="change-log-tab" data-toggle="tab" href="#change-log" role="tab" aria-controls="change-log" aria-selected="false">Change Log</a>
    </li>
<?php endblock() ?>


<?php startblock('page-body');?>


<!-- Tab panes -->
<div class="tab-content">
<!-- icon library -->
  <div class="tab-pane active" id="icons" role="tabpanel" aria-labelledby="icons-tab">
    <p class="lead">The design of system icons is simple, modern, friendly, and sometimes quirky. Each icon is reduced to its minimal form, with every idea edited to its essence. The designs ensure readability and clarity even at small sizes.</p>
    <h4>Design principles:</h4>
    <p>Bold, Friendly, Modern, Universal, Accessible, Simple</p>
    <ul class="nav nav-tabs-line" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="solid-icons-tab" data-toggle="tab" href="#solid-icons" role="tab" aria-controls="solid-icons" aria-selected="true">Solid</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" id="line-icons-tab" data-toggle="tab" href="#line-icons" role="tab" aria-controls="line-icons" aria-selected="false">Line</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" id="illustrations-tab" data-toggle="tab" href="#illustrations" role="tab" aria-controls="illustrations" aria-selected="false">Illustrations</a>
       </li>
    </ul>
    <div class="tab-content">
          <div class="tab-pane active" id="solid-icons" role="tabpanel" aria-labelledby="solid-icons-tab">
            <h6 class="text-right"><?php echo count($solidIcons); ?> solid icons</h6>
            <div class="row">
              <?php for($i = 0; $i < ceil(count($solidIcons)) ; $i++){ ?>
                <div class="col-6 col-sm-4 col-lg-3 text-center mb-4">
                    <div class="card">
                      <h6><?php echo ucfirst($solidIcons[$i][0]);?></h6>
                      <p><i class="gel-icon-2x gel-icon-<?php echo $solidIcons[$i][1];?>"></i></p>
                      <small><code>.gel-icon-<?php echo $solidIcons[$i][1];?></code></small>
                    </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="tab-pane" id="line-icons" role="tabpanel" aria-labelledby="line-icons-tab">
            <h6 class="text-right"><?php echo count($lineIcons); ?> line icons</h6>
            <div class="row">
            <?php for($i = 0; $i < ceil(count($lineIcons)) ; $i++){ ?>
              <div class="col-6 col-sm-4 col-lg-3 text-center mb-4">
                  <div class="card">
                    <h6><?php echo ucfirst($lineIcons[$i][0]);?></h6>
                    <p><i class="gel-icon-2x gel-icon-<?php echo $lineIcons[$i][1];?>-o"></i></p>
                    <small><code>.gel-icon-<?php echo $lineIcons[$i][1];?>-o</code></small>
                  </div>
              </div>
            <?php } ?>
            </div>
          </div>
          <div class="tab-pane" id="illustrations" role="tabpanel" aria-labelledby="illustrations-tab">
            <div class="row">
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description" /></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer"></div>
              <div class="col-1"><img src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract"></div>
          </div>
        </div>
      </div>
    </div>
<!-- how to use -->
  <div class="tab-pane" id="usage" role="tabpanel" aria-labelledby="usage-tab">
    <h4>Basic use</h4>
    <p>You can place Font Awesome icons just about anywhere using a CSS style prefix and the icon’s name. Font Awesome is designed to be used with inline elements.</p>
  </div>
<!-- change log -->
  <div class="tab-pane" id="change-log" role="tabpanel" aria-labelledby="change-log-tab">5</div>
</div>

<?php endblock()?>
