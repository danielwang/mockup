 <?php
// Reset this to compile large nesting level of less
ini_set('xdebug.max_nesting_level', 500);
// remove old pageup css if it exists, every time refresh page
$cssfile = 'dist/css/pageup-gel.css';
$sgCssFile = 'css/styleguide.css';
if (file_exists($cssfile)) {
	unlink($cssfile);
}
if (file_exists($cssfile)) {
  unlink($sgCssFile);
}
// Compile less to output a css file
require_once 'vendor/scssphp/scss.inc.php';
use Leafo\ScssPhp\Compiler;

$scss = new Compiler();
$scss->setImportPaths("build/pageup/");
$cssOut = $scss->compile('@import "gel.scss"');
file_put_contents(__DIR__ . '/dist/css/pageup-gel.css', $cssOut);

$sgCss = new Compiler();
$sgCss->setImportPaths("css/");
$sgCssOut = $sgCss->compile('@import "styleguide.scss"');
file_put_contents('css/styleguide.css', $sgCssOut);


// Build out URI to reload from form dropdown
// Need full url for this to work in Opera Mini
$pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

if (isset($_POST['sg_uri']) && isset($_POST['sg_section_switcher'])) {
	$pageURL .= $_POST[sg_uri] . $_POST[sg_section_switcher];
	$pageURL = htmlspecialchars(filter_var($pageURL, FILTER_SANITIZE_URL));
	header("Location: $pageURL");
}
// Display title of each markup samples as a select option
function listElementsAsOptions($type) {
	$files = array();
	$handle = opendir($type . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.html$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$title = ucwords($title);
		echo '<li><a href="#sg-' . $filename . '">' . $title . '</a></li>';
	endforeach;
}
// Display title of each markup samples as a select option
function listMarkupAsOptions($type, $format) {
	$files = array();
	$handle = opendir('pui/elements/markup/' . $type);
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.' . $format)):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.$format$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$title = ucwords($title);
		echo '<li><a href="#sg-' . $filename . '">' . $title . '</a></li>';
	endforeach;
}
// Display foundation elements
function showDocs() {
	$files = array();
	$handle = opendir('pui/docs/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.html$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		echo '<div class="col-lg-12 sg-section" id="sg-' . $filename . '">';
		echo '<div class="sg-display">';
		include 'pui/docs/' . $file;
		echo '</div><!--/.sg-display-->';
		echo '</div><!--/.sg-section-->';
	endforeach;
}
// Display foundation elements
function showFoundation() {
	$files = array();
	$handle = opendir('pui/foundation/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.html')):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.html$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		echo '<div class="col-lg-12 sg-section" id="sg-' . $filename . '">';
		echo '<div class="sg-display">';
		echo '<h2 class="sg-h2"><a id="sg-' . $filename . '" class="sg-anchor">' . $title . '</a></h2>';
		include 'pui/foundation/' . $file;
		echo '</div><!--/.sg-display-->';
		echo '</div><!--/.sg-section-->';
	endforeach;
}
// Display markup view & source
function showMarkup($type, $format) {
	$files = array();
	$handle = opendir('pui/elements/markup/' . $type);
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.' . $format)):
			$files[] = $file;
		endif;
	endwhile;

	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.$format$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$documentation = 'pui/elements/usage/' . $type . '/' . $file;
    $demo = 'pui/elements/demo/' . $type . '/' . $file;
		echo '<div class="sg-markup sg-section">';
		echo '<div class="sg-display">';
    if (isBeta($title)){
      echo '<h2 class="sg-h2"><a id="sg-' . $filename . '" class="sg-anchor">' . $title . '<sup class="gel-tag gel-tag-sm gel-tag-purple">Beta
    </sup></a></h2>';
    }else{
      echo '<h2 class="sg-h2"><a id="sg-' . $filename . '" class="sg-anchor">' . $title . '</a></h2>';
    }

		if (file_exists($documentation)) {
			echo '<div class="row"><div class="col-md-12 col-lg-8">';
		} else {
			echo '<div class="row"><div class="col-sm-12">';
		}
		include 'pui/elements/markup/' . $type . '/' . $file;
    // demo markup code 
    // if (file_exists($demo)) {
    //   if (!isBeta($title)){
    //       echo '<div class="sg-markup-controls hidden-xs hidden-sm hidden-md"><a class="btn btn-xs sg-btn sg-btn--source" href="#"><i class="fa fa-code"></i>&nbsp;View Code</a></div>';
    //       echo '<div class="sg-source sg-animated">';
    //       echo '<a class="btn btn-default sg-btn sg-btn--select" href="#">Copy Source</a>';
    //       echo '<pre class="prettyprint linenums"><code>';
    //       echo htmlspecialchars(file_get_contents('pui/elements/demo/' . $type . '/' . $file));
    //       echo '</code></pre>';
    //       echo '</div><!--/.sg-source-->';
    //     }
    // }
		echo '</div>';
		if (file_exists($documentation)) {
			echo '<div class="hidden-xs hidden-sm hidden-md col-lg-4"><div class="sg-doc">';
			echo '<h4 class="sg-h4">Usage Notes</h4>';
			include $documentation;
			echo '</div></div>';
		}
		echo '</div><!--/.row-->';
		echo '</div><!--/.sg-display-->';
		echo '</div><!--/.sg-section-->';
	endforeach;
}

function isBeta($title){
  $beta = array("labels", "loadings", "wizard", "cards", "panels", "box", "stepper", "timeline");
  if (in_array($title, $beta)) {
      return true;
  }else{
      return false;
  }
}
?>
