<?php $pageTitle = "Iconography"; $hasSubPage = false; include '../base-ui.php';?>

<?php

function buildSolidIcons(){
  return  [
    ["logo", "logo"],
    ["print", "print"],
    ["help", "help-pointer"],
    ["info", "info"],
    ["info", "info-pointer"],
    ["beta", "beta"],
    ["beta feedback", "beta-feedback"],
    ["alpha", "alpha"],
    ["alpha feedback", "alpha-feedback"],
    ["live", "logo"],
    ["feedback", "feedback"],
    ["search", "search"],
    ["warning", "warning"],
    ["error", "error"],
    ["login", "login"],
    ["logout", "logout"],
    ["bullhorn", "bullhorn"],
    ["arrow right", "arrow-right"],
    ["arrow left", "arrow-left"],
    ["upload", "upload"],
    ["download", "download"],
    ["angle down", "angle-down"],
    ["angle up", "angle-up"],
    ["angle left", "angle-left"],
    ["angle right", "angle-right"],
    ["share", "share"],
    ["tick", "tick-circle"],
    ["close", "close-circle"],
    ["trash", "trash"],
    ["notes", "notes"],
    ["new", "new"],
    ["eye", "eye"],
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
    ["database","database"],
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
    ["edit","edit"],
    ["sketch","sketch"],
    ["tray","tray"],
    ["sad","sad"],
    ["frown","frown"],
    ["meh","meh"],
    ["smile","smile"],
    ["happy","happy"],
    ["thirdparty","thirdparty"],
    ["configure","configure"],
    ["integration","integration"],
    ["succession","succession"],
    ["money","money"],
    ["learning","learning"],
    ["cost","cost"],
    ["sourcing","sourcing"],
    ["application","application"],
    ["onboarding", "onboarding"],
    ["clock","clock"],
    ["close app","close-app"],
    ["bell","bell"],
    ["target","target"],
    ["team","team"],
    ["control","control"]
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
    ["add","add"],["unlock","unlock"],["view","view"],["resume","application"],
    ["sad","sad"],["frown","frown"],["meh","meh"],["smile","smile"],["happy","happy"]
  ];
}

$lineIcons = buildLineIcons();

?>
<?php startblock('page-tagline');?>
  The design of system icons is simple, modern, friendly, and sometimes quirky. Each icon is reduced to its minimal form, with every idea edited to its essence. The designs ensure readability and clarity even at small sizes.
<?php endblock() ?>
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
<div class="tab-content icon-library">
<!-- icon library -->
  <div class="tab-pane active" id="icons" role="tabpanel" aria-labelledby="icons-tab">

    <h3>When to use icons</h3>
    <p>Icons are powerful visual helpers, and should be used with care. Overuse quickly results in UIs that are visually overwhelming or distracting.</p>

    <p>Icons are commonly used:</p>

    <ul>
      <li> In primary navigation </li>
      <li>In page headers and section titles</li>
      <li>In banners to bring attention to a specific theme (an announcement, an error, etc.)</li>
      <li>Inline with text to add clarity</li>
      <li>To direct a user’s attention to something they can take action on, or which results in an action</li>
    </ul>
    <ul class="nav nav-tabs nav-fill" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="solid-icons-tab" data-toggle="tab" href="#solid-icons" role="tab" aria-controls="solid-icons" aria-selected="true">Solid Icons</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" id="line-icons-tab" data-toggle="tab" href="#line-icons" role="tab" aria-controls="line-icons" aria-selected="false">Line Icons</a>
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
                  <div class="card border-0">
                    <h6><?php echo ucfirst($solidIcons[$i][0]);?></h6>
                    <p><a href="<?php echo ($resURL) ?>images/SVG/<?php echo $solidIcons[$i][1];?>.svg" data-toggle="tooltip" data-placement="top" title="Click to download SVG" download><i class="gel-icon-2x gel-icon-<?php echo $solidIcons[$i][1];?>"></i></a></p>
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
                <div class="card border-0">
                  <h6><?php echo ucfirst($lineIcons[$i][0]);?></h6>
                  <p><a href="<?php echo ($resURL) ?>images/SVG/<?php echo $lineIcons[$i][1];?>.svg" download><i class="gel-icon-2x gel-icon-<?php echo $lineIcons[$i][1];?>-o"></i></a></p>
                  <small><code>.gel-icon-<?php echo $lineIcons[$i][1];?>-o</code></small>
                </div>
            </div>
          <?php } ?>
          </div>
        </div>
        <div class="tab-pane" id="illustrations" role="tabpanel" aria-labelledby="illustrations-tab">
          <div class="row">
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/pd.svg" alt="Position Description" /></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/job.svg" alt="Jobs"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/approval.svg" alt="Approval"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/sourcing.svg" alt="Advertising"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/list.svg" alt="Shortlisting"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/panel.svg" alt="Panel"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/interview.svg" alt="Interview"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/offer.svg" alt="Offer"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/contract.svg" alt="Contract"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/target.svg" /></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/folder.svg" alt="Jobs"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/bulb.svg" alt="Approval"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/pencil.svg" alt="Advertising"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/paperplane.svg" alt="Shortlisting"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/key.svg" alt="Advertising"></div>
            <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/personas.svg" alt="Shortlisting"></div>
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
