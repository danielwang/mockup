<?php $parent = "adm"; $pageAction = false; $pageTitle = "Large table"; include '../base-t1.php';?>

<?php emptyblock('page-tabs') ?>

<?php startblock('page-body');?>
<?php include "partials/_large-table.html" ?>
<?php endblock()?>

<script>
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
const outterWrapper = document.querySelector('[data-control="scroller-wrapper"]');
const innerContent = outterWrapper.querySelector('[data-control="scroller-content"]');
const scroller = document.querySelector('.scroller');

var rightBtn = scroller.querySelector('.scroller-right-btn');
var leftBtn = scroller.querySelector('.scroller-left-btn');
var timeout;

scrollerInit();

// Add scroller contrl on desktop
if (!isMobile) {
    scrollerInit();
} else{
    //hide scroller contrl on mobile touch devices
    scroller.classList.add('d-none');
}

function getOutterWrapperWidth(){
   return outterWrapper.clientWidth;
}

function getInnerConcentWidth(){
  return innerContent.clientWidth;
}

function getOverflowDis(){
    return getInnerConcentWidth() - getOutterWrapperWidth();
}

function scrollerInit(){
  // there is overflow
  if (getOutterWrapperWidth() < getInnerConcentWidth()) {
      //show scroller
      console.log('s');
      scroller.classList.remove('d-none');
      rightBtn.classList.remove('disabled');
  }
  else{
      console.log('sn');
      scroller.classList.add('d-none');
  }

}
// disable or enable scroller left right buttons
function scrollerReset(){

  if (outterWrapper.scrollLeft > 0) {
      // leftBtn.disabled = false;
      leftBtn.classList.remove('disabled');
  } else{
      leftBtn.classList.add('disabled');
  }

  if (outterWrapper.scrollLeft == getOverflowDis()) {
      rightBtn.classList.add('disabled');
  } else{
      rightBtn.classList.remove('disabled');
  }

}

rightBtn.onclick = function () {
    sideScroll(outterWrapper,'right',20,300,20);
};
leftBtn.onclick = function () {
    sideScroll(outterWrapper,'left',20,300,20);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;

        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
        scrollerReset();
    }, speed);

}

// Listen for resize windows events
window.addEventListener('resize', function ( event ) {
	// If timer is null, reset it to 66ms and run your functions.
	// Otherwise, wait until timer is cleared
	if ( !timeout ) {
		timeout = setTimeout(function() {
			// Reset timeout
			timeout = null;
			// Run our resize functions
			scrollerInit();

		}, 66);
	}
}, false);

outterWrapper.addEventListener('scroll', function() {
    scrollerReset();
});
</script>
