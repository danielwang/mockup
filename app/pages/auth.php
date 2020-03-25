<?php $blokk=false; $parent = "hm"; $pageTitle = "PageUp Auth"; include '../base-t5.php';?>

<?php startblock('page-body');?>

<section class="p-3 bg-navy vw-100 vh-100 d-flex align-items-center justify-content-center"> 
    <div class="row">
        <div class="col-md-6 d-flex align-items-center">
            <div class="text-center">
                <p class="text-left"><img width="120" src="<?php echo ($resURL) ?>site-images/pageup-logo-white.svg"></p>
                <p><img width="280" src="<?php echo ($resURL) ?>images/illustrations/security.svg"></p>
                <h1 class="text-white my-5">PageUp Auth</h1>
                <p class="lead text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>    
        </div>
        <div class="col-md-6"> 
            <div class="d-flex flex-column align-items-center"> 
                <div class="card my-4" style="width:300px">
                    <p>Please login via Single Sign On</p>
                    <button class="btn btn-info">SSO</button>
                </div>
                <p class="text-white text-center">OR</p>
                <div class="card" style="width:300px">
                    <div class="form-group">
                        <label for="validationCustom01">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span aria-hidden="true" class="input-group-text"><i class="gel-icon-envelope gel-icon-sm text-muted"></i></span>
                            </div>
                            <input type="text" id="validationCustom01" alue="" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span aria-hidden="true" class="input-group-text"><i class="gel-icon-lock gel-icon-sm text-muted"></i></span>
                            </div>
                            <input type="text" id="validationCustom01" value="" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="checkbox checkbox-default"><input id="checkbox1" type="checkbox">
                        <label for="checkbox1">
                            Remember my login details
                        </label>
                    </div>
                    <p>  
                        <button class="btn btn-primary btn-block">Login</button>
                    </p>    
                    <div class="text-center">
                        <a href="#">Don't know your password?</a>
                    </div>
                </div> 
            </div>   
        </div> 
    </div>
</section>
<?php endblock()?>
