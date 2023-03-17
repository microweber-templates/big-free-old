<?php

/*

type: layout

name: Call to action 25

position: 25

categories: Call to Action

*/

?>

<style>


    .merry-cta-div-form .mb-3.d-flex.d-flex {
        margin-bottom: 0px!important;
    }


    .merry-cta-div-form {
        padding: 10px;
        background-color: white;
    }

    .merry-cta-div-form .btn {
        background-color: #181E4E!important;
        padding: 20px;

    }


    .merry-cta-div-form input {
        border: none !important;
        padding-top: 0;
        padding-bottom: 0;
    }


    .merry-cta-div-form input {
        padding: 20px;
        border-radius: 40px;
    }



    .merry-cta-circle-images.merry-cta-circle-images-1 {
        bottom: 300px;
        left: -43%;
    }

    .merry-cta-circle-images.merry-cta-circle-images-2 {
        bottom: 170px;
        left: -43%;
    }
    .merry-cta-circle-images.merry-cta-circle-images-3 {
        bottom: 150px;
        left: -27%;
    }
    .merry-cta-circle-images.merry-cta-circle-images-4 {
        bottom: 0px;
        left: -40%;
    }
    .merry-cta-circle-images.merry-cta-circle-images-5 {
        bottom: 300px;
        right: -43%;
    }
    .merry-cta-circle-images.merry-cta-circle-images-6 {
        bottom: 170px;
        right: -25%;
    }
    .merry-cta-circle-images.merry-cta-circle-images-7 {
        top: -128px;
        right: -40%;
    }



</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-25-<?php print $params['id'] ?>" rel="module" style="background-color: #181E4E;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto text-center allow-drop">
                <h1 class="mb-5" style="color: #ffffff;" >New episodes Will always <br> Updated regularly</h1>
                <p style="color: #ffffff;" class="lead mb-7">Waste of resources our competitors are juping the shark for to
                    <br> be inspired is to something else.</p>
                <br/>
                <br/>
                <module class="w-100" type="contact_form" template="merry-cta-form"/>

                <br/>
                <br/>
                <br/>

                <div class="d-flex flex-wrap  justify-content-center text-center text-md-start nodrop position-relative">
                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-1 position-xl-absolute">
                        <div class="mx-auto" style="width: 95px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-1.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-2 position-xl-absolute">
                        <div class="mx-auto" style="width: 62px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-2.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-3 position-xl-absolute">
                        <div class="mx-auto" style="width: 94px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-3.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-4 position-xl-absolute">
                        <div class="mx-auto" style="width: 94px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-4.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-5 position-xl-absolute">
                        <div class="mx-auto" style="width: 137px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-5.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-6 position-xl-absolute">
                        <div class="mx-auto" style="width: 93px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-6.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable merry-cta-circle-images merry-cta-circle-images-7 position-xl-absolute">
                        <div class="mx-auto" style="width: 114px;">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-cta-7.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
