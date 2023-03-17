<?php

/*

type: layout

name: Team 17

position: 17

categories: Team

*/

?>

<style>




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

<style>
    .team-17-btn {
        border-radius: 100px 0 100px 100px!important;
        background-color: #FF2359;
        color: white;
        padding: 20px 40px;
    }

    .flower-team-card-img {
        border-radius: 0 15px 0 15px;
        padding: 10px;
    }

    .flower-card.card {
        margin: 0 20px;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-17-<?php print $params['id'] ?>" rel="module" style="background-color: #000000;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-md-12 mx-auto">
                <div class=" d-flex justify-content-center flex-wrap text-center mx-auto">
                    <div class="col-12 col-md-6 col-12 mx-auto">
                        <div class="text-center text-lg-center pb-5 allow-drop position-relative">
                            <h2 class="text-xl-start mb-0" style="color: #ffffff;">Meet Our <br> Proffessional Mentor</h2>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-12 mx-auto text-center text-xl-start d-flex align-items-center justify-content-center">
                        <div class="allow-drop">

                            <p class=" mb-4" style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt amet sit placerat diam praesent pharetra at. Gravida ornare mauris pretium tortor, ac in nulla eleifend.</p>
                            <br/>
                            <module type="btn" button_text="View All" button_style="team-17-btn"/>
                        </div>
                    </div>
                </div>
                    <div class="d-flex justify-content-center align-items-center mt-5 flex-wrap">
                        <div class="col-xl-3 col-md-6 col-sm-8 col-12 mx-auto d-flex justify-content-center align-items-center py-4 cloneable">
                            <div class="flower-card card w-100" style="border-radius: 0 20px 0 20px;">
                                <img src="<?php print template_url(); ?>assets/img/layouts/flower/Rectangle-home-team-1.png" class="flower-team-card-img card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Thomas Lynn</h5>
                                    <p class="card-text">UI/UX DEsigner</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-sm-8 col-12 mx-auto d-flex justify-content-center align-items-center py-4 cloneable">
                            <div class="flower-card card w-100" style="border-radius: 0 20px 0 20px;">
                                <img src="<?php print template_url(); ?>assets/img/layouts/flower/Rectangle-home-team-2.png" class="flower-team-card-img card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Alex Reena</h5>
                                    <p class="card-text">Web Development</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-sm-8 col-12 mx-auto d-flex justify-content-center align-items-center py-4 cloneable">
                            <div class="flower-card card w-100" style="border-radius: 0 20px 0 20px;">
                                <img src="<?php print template_url(); ?>assets/img/layouts/flower/Rectangle-home-team-3.png" class="flower-team-card-img card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tom Curran</h5>
                                    <p class="card-text">Marketing</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-sm-8 col-12 mx-auto d-flex justify-content-center align-items-center py-4 cloneable">
                            <div class="flower-card card w-100" style="border-radius: 0 20px 0 20px;">
                                <img src="<?php print template_url(); ?>assets/img/layouts/flower/Rectangle-home-team-4.png" class="flower-team-card-img card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">David Miller</h5>
                                    <p class="card-text">Digital Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


        </div>
    </div>
</section>
