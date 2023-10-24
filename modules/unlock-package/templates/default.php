<?php

/*

type: layout

name: Default

description: Default

*/

?>

<style>
    .unlock-package-columns {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .font-weight-bold {
        font-weight: 700;
    }

    .font-weight-normal {
        font-weight: 500;
    }

    .unlock-package-right-side-img {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 400px;
        width: 100%;
    }
</style>
<div class="mh-100vh row mx-auto align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="col-md-9 unlock-package-columns">


        <div class="col-md-8 mx-auto">
            <h1 class="font-weight-bold">Unlock the power of <span class="text-primary">BIG Template</span></h1>
            <h4>Use all layouts to make an awesome websites!</h4>
            <h4>Buy license key "Big Template" and unlock 300 more layouts,</h4>
            <h4>only for $59 per year or $169 lifetime license</h4>

            <br>
            <a class="btn btn-primary" target="_blank" href="https://microweber.org/go/market?prefix=modules/white_label">Get License</a>

            <br> <br> <br>

            <div class="col-md-6">
                <form class="d-flex align-items-center">
                    <input type="text" id="js-unlock-package-license-key-<?php echo $params['id'];?>" name="local_key" autocomplete="on" autofocus="true" class="form-control my-3" placeholder="License key">
                    <div class="ms-md-3">
                        <button id="js-unlock-package-save-license-<?php echo $params['id'];?>" type="button" class="btn btn-outline-primary">Unlock</button>
                    </div>
                </form>
            </div>

            <p class="font-weight-bold">Have a problem with your White Label license key?
                <a class="text-primary" href="javascript:;" onmousedown="mw.contactForm();">Contact us.</a>
            </p>
        </div>


    </div>
    <div class="col-md-3 px-0 unlock-package-columns position-relative" style="background-color: #f5f5f5;">

        <div class="ps-5">
            <h1><span class="font-weight-bold">350</span><span class="form-weight-normal">Layouts</span></h1>
            <h2><span class="font-weight-bold">20</span><span class="form-weight-normal">Categories</span></h2>
            <h3><span class="font-weight-bold">75</span><span class="form-weight-normal">Modules</span></h3>
            <h4> Updates</h4>
            <h4> Live Support</h4>
            <h4> and more ...</h4>
        </div>

        <img class="unlock-package-right-side-img" src="<?php print modules_url(); ?>unlock-package/assets/img/right-banner.jpg" alt="">


    </div>
</div>

