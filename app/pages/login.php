<?php $blokk=false; $parent = "hm"; $pageTitle = "Login"; include '../base-t5.php';?>

<?php startblock('page-body');?>
<main class="d-flex vw-100 vh-100">
        <section class="w-50 bg-navy d-flex justify-content-center align-items-center px-7">
            <section>
                <div class="text-center">
                    <svg width="180" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 690.8 222.7" style="enable-background:new 0 0 690.8 222.7;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#ffffff;}
                    </style>
                    <g>
                        <g>
                            <g>
                                <path class="st0" d="M21.9,63.8h50.3c30.4,0,40.5,7.3,40.5,39.1c0,32.1-10.8,37.7-40.5,37.7H43.7v36.8H21.9V63.8z M72.2,122
                                    c15.6-0.3,18.6-3.2,18.6-19.1c0-16.1-2.3-20.6-18.6-20.5H43.7V122H72.2z"/>
                                <path class="st0" d="M176.4,167.4h-0.5c-3.8,10.6-15.4,10.9-24.7,10.9c-18,0-29.7-3.8-29.7-25.3c0-19.1,10-24.4,29.7-24.4
                                    c9.7,0,19.2,0.2,23.8,9.1h0.6v-10.3c0-12.9-1.1-17.4-17-17.4c-8.3,0-15,0.8-15,11.1h-19.1c0-23.2,15.9-24.1,34.1-24.1
                                    c25.4,0,36,3.9,36,30.6v49.8h-19.1L176.4,167.4z M140.6,153c0,11.2,4.5,12.3,17.4,12.3c10.1,0,17.6-0.9,17.6-12.3
                                    c0-11.1-8.2-11.4-17.6-11.4C148.3,141.7,140.6,141.7,140.6,153z"/>
                                <path class="st0" d="M262.8,166.1h-0.4c-5,10.5-15.1,12.3-24.8,12.3c-27.3,0-30.5-15-30.5-38.3c0-24.4,0.9-43,30.5-43
                                    c11.2,0,20,2.4,24.8,12.9h0.6l-0.8-12h19.1v79.4c0,28.6-9.1,35.4-38.2,35.4c-19.4,0-33.9-3.3-32.7-27.1h17.9
                                    c0,10.9,4.1,12.6,14.8,12.6c16.2,0,19.7-3.3,19.7-17L262.8,166.1L262.8,166.1z M226.2,135.3c0,18,0,28.5,17,28.5
                                    c19.1,0,19.1-9.5,19.1-28.5c0-17-2.6-23.8-19.1-23.8C230,111.5,226.2,115.3,226.2,135.3z"/>
                                <path class="st0" d="M368.5,152.1c0,25-14.4,26.2-37.1,26.2c-30.5,0-36.7-9.7-36.7-40.5c0-28.5,4.5-40.9,36.7-40.9
                                    c32.7,0,37.1,9.6,37.1,44.2h-54.7c0,17.1,0.5,22.6,17.6,22.6c10.6,0,18,0.2,18-11.7L368.5,152.1L368.5,152.1z M349.4,129.1
                                    c0-16.4-2.4-17.6-18-17.6c-16.5,0-17.6,3.5-17.6,17.6H349.4z"/>
                                <path class="st0" d="M474.5,63.8v81.8c0,30.4-18.2,32.7-45,32.7c-24.8,0-45-0.6-45-32.7V63.8h12.9v81.8
                                    c0,18.5,4.4,21.4,32.1,21.4c22.9,0,32.1-0.2,32.1-21.4V63.8H474.5z"/>
                                <path class="st0" d="M496.7,107.6l0.3,0.3c4.9-9.1,15.6-10.9,25.6-10.9c28.9,0,31,17,31,40.8c0,31.5-7.7,40.6-31,40.6
                                    c-9.1,0-21.1-1.1-25.6-10.3h-0.3v43.8h-12v-114h12L496.7,107.6L496.7,107.6z M496.7,137.7c0,18.8,1.2,30.9,22.6,30.9
                                    c18.5,0,22-5.2,22-30.9c0-23.8-1.7-31.1-22-31.1C496.7,106.7,496.7,116.7,496.7,137.7z"/>
                            </g>
                            <g>
                                <path class="st0" d="M614.7,118.2c-4.3,0-8.4-1.7-11.4-4.7l-37.9-37.9c-6.3-6.3-6.3-16.6,0-22.9l37.9-37.9
                                    c3.1-3.1,7.1-4.7,11.5-4.7c4.3,0,8.4,1.7,11.4,4.7l37.9,37.9c6.3,6.3,6.3,16.6,0,22.9l-37.9,37.9
                                    C623.1,116.5,619.1,118.2,614.7,118.2z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                </div>    
                <div class="card mt-5" style="width:300px">
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
                    <div class="form-group">
                        <label for="validationCustom01">Security Key</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span aria-hidden="true" class="input-group-text"><i class="gel-icon-key gel-icon-sm text-muted"></i></span>
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
            </section>
        </section>
        <section class="w-50 d-flex flex-column justify-content-center align-items-center px-7 blokk bg-white">
            <img class="img-fluid" src="https://www.pageuppeople.com/wp-content/uploads/2020/03/06032020-blog-main-V2-01-Mid-Res-1024x512.png" />
            <h1 class="my-5">Our job advertising template</h1>
            <p class="lead text-center">
            Our job advertising template just keeps on giving. You asked for it and we have delivered it.</p>
        </section>    
    </main>  

<?php endblock()?>
