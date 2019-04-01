<?php $pageTitle = "Iconography"; $hasSubPage = true; include '../base-t3.php';?>

<?php

function imageList($type){
  $svgs = array();
  $handle = opendir('../images/' . $type . '/');
  while (false !== ($svg = readdir($handle))):
    if (stristr($svg, '.svg')):
      $name = substr($svg, 0 , (strrpos($svg, ".")));
      $svgs[] = $name;
    endif;
  endwhile;
  sort($svgs);
  return $svgs;
}

$icons = imageList('icons');
$illustrations = imageList('illustrations');

?>
<?php startblock('page-tagline');?>
  The design of system icons is simple, modern, friendly, and sometimes quirky. Each icon is reduced to its minimal form, with every idea edited to its essence. The designs ensure readability and clarity even at small sizes.
<?php endblock() ?>

<?php startblock('page-tabs') ?>
        <li class="nav-item">
          <a class="nav-link active" id="icons-tab" data-toggle="tab" href="#icons" role="tab" aria-controls="icons" aria-selected="true">Icons <span class="badge badge-info text-sm"><?php echo count($icons); ?></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="illustrations-tab" data-toggle="tab" href="#illustrations" role="tab" aria-controls="change-log" aria-selected="false">Illustrations <span class="badge badge-info  text-sm"><?php echo count($illustrations); ?></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false">How to use</a>
        </li>
  <!-- Nav tabs -->
<?php endblock() ?>

<?php startblock('page-body');?>
<!-- Tab panes -->
<div class="tab-content">
<!-- icon library -->
  <div class="tab-pane active" id="icons" role="tabpanel" aria-labelledby="icons-tab">
    <div class="row">
      <?php for($i = 0; $i < ceil(count($icons)) ; $i++){ ?>
        <div class="col-6 col-sm-4 col-lg-3 col-xxl-2 text-center mb-4">
            <div class="p-1 m-1 text-center">
              <h6><?php echo $icons[$i];?></h6>
              <p><a class="text-muted" href="<?php echo ($resURL) ?>site-images/SVG/<?php echo $icons[$i];?>.svg" download><i data-toggle="tooltip" data-placement="top" title="Click to download SVG" class="gel-icon-2x gel-icon-<?php echo $icons[$i];?>"></i></a></p>
              <small><code>.gel-icon-<?php echo $icons[$i];?></code></small>
            </div>
        </div>
      <?php  } ?>
    </div>
  </div>
<!-- how to use -->
  <div class="tab-pane bg-white py-3 rounded" id="illustrations" role="tabpanel" aria-labelledby="usage-tab">
    <div class="row">
        <!-- <?php //for($i = 0; $i < ceil(count($illustrations)) ; $i++){ ?>
          <div class="col-2 mb-5 text-center"><img width="48px" src="<?php echo ($resURL) ?>images/illustrations/<?php echo $illustrations[$i] ?>.svg" alt="Position Description" /></div>
        <?php // } ?> -->
        <?php echo "[" ?>
        <?php for($i = 0; $i < ceil(count($illustrations)) ; $i++){ ?>
        <?php echo "'" . $illustrations[$i] . "', " ?>
        <?php  } ?>
        <?php echo "]" ?>
    </div>
  </div>
<!-- change log -->
  <div class="tab-pane" id="usage" role="tabpanel" aria-labelledby="change-log-tab">
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
    </div>
</div>

<?php endblock()?>
