<?php

/*

type: layout

name: Call to action 24

position: 24

categories: Call to Action

*/

?>


<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>

    /*@media (min-width: 1000px) {*/
    /**/
    /*    .ziza-cta-box {*/
    /*        background-image: url('*/<?php //print template_url(); ?>/*assets/img/layouts/ziza/ziza-Group-75.png');*/
    /*        background-size: contain;*/
    /*    }*/
    /*}*/

    .flower-cta-box {
        background-color: #000000;
        height: 400px;
        border-radius: 50px 0;
    }

    .flower-cta-div-form .mb-3.d-flex.d-flex {
        margin-bottom: 0!important;
    }

    .flower-cta-div-form {
        padding: 10px;
        border-radius: 30px 0;
        background-color: white;
    }

    .flower-cta-div-form .btn {
        border-radius: 30px 0;
        background-color: #FF2359!important;
        padding: 20px;

    }


    .flower-cta-div-form input {
        border: none !important;
        padding-top: 0;
        padding-bottom: 0;
        border-radius: 30px 0;


    }

</style>

<section class="section ziza-cta-form-wrapper pt-10 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-24-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid position-relative">

        <div class="row col-xl-10 col-12 mx-auto align-items-center justify-content-center flower-cta-box">

            <div class="d-flex align-items-center justify-content-center ">
                <div class="col-lg-10 col-12">
                    <div class="col-12 text-center">
                        <div class="w-100 allow-drop">
                            <h2 class="mb-3" style="color: #ffffff;">Subscribe for Get Update Every <br> New Courses</h2>
                            <p class="mb-5" style="color: #ffffff;">586K Students daily learn with e-learning. Subscribe for new course</p>
                        </div>
                    </div>

                    <div class="col-12 col-xl-8 allow-drop  mt-5 mt-lg-0 mx-auto">
                        <module class="w-100" type="contact_form" template="flower-cta-form"/>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
