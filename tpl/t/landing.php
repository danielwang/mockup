<?php $layout="fluid"; $pageTitle = "Featured landing page"; $parent = "es"; include '../base-t1.php';?>

<?php startblock('page-header');?>
<header id="gel-masthead">
   <div class="container">
     <div class="row">
       <div class="col-lg-7">
         <div class="header-content">
           <h1>PageUp™ Everyday Performance Mobile App</h1>
            <p style="margin-top:30px"><a href="#"><img src="<?php echo ($resURL) ?>images/download-app-store.png" width="150" /></a> &nbsp;&nbsp;&nbsp;
             <a href="#"><img src="<?php echo ($resURL) ?>images/download-google-play.png" width="150" /></a>
            </p>
         </div>
       </div>
     </div>
   </div>
 </header>
<?php endblock()?>

<?php startblock('page-body');?>
<section style="background-color: #92acbb; color:white;">
  <div class="container">
    <div class="row vh-align-center">
      <div class="col-sm-6 text-center">
        <h3>Simply scan the QR code to login</h3>
      </div>
      <div class="col-sm-6 text-center">
        <img src="<?php echo ($resURL) ?>images/qr-code.png"/>
      </div>
    </div>
  </div>
</section>
<section class="bg-info">
  <div class="container">
    <div class="row vh-align-center">
      <div class="col-md-6">
      <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/ZFyvsXJfLnY' frameborder='0' allowfullscreen></iframe></div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <h2 style="color:#54c1eb;">Let’s make 1:1 meetings better</h2>
        <p style="font-size: 18px; margin-top:30px">Life is busy. We all know keeping track of progress towards goals and demonstrating  success is important. We know that having the right conversations at 1:1 meetings requires an intentional approach - but too-often tracking progress and having effective 1:1s is relegated to the too-hard basket. </p>
        <p style="font-size: 18px; margin-top:30px">Everyday Performance allows you to easily access your goals and prepare for 1:1 meetings. Between meetings, you, your manager and peers can contribute notes to keep track of progress towards goals and highlight any wins or blockers. When it comes to 1:1 meetings, you’ll have everything you need to illustrate your success, or seek the advice you need to meet your goals, together with tips and tricks to make your meetings more effective.</p>
      </div>
    </div>
  </div>
</section>
<?php endblock()?>
