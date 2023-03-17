<?php

/*

type: layout

name: Feature 47

position: 47

categories: Features

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
    .action-graph-img {
        bottom: -132px;
        left: -133px;
    }

    .action-features-bubbles {
        background-color: rgba(255, 160, 40, 0.2);
        width: 85px;
        height: 85px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        margin-top: 5px;
    }

    .action-features-icon {
        color: #FFA028!important;
        font-size: 45px;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-47-<?php print $params['id'] ?>" rel="module" style="background-color: #F9FAFB;">
    <div class="container-fluid">
        <div class="row col-xl-10 mx-auto">
            <div class="col-12 col-xl-6 ps-4 text-center text-xl-start order-2 order-xl-1">
                <h2>Specialist In Aviding Clients <br> On Financial Challenges</h2>
                <p class="mb-5 mt-3" style="color: #8C93A4;">We are idea generators, goaal seekers, challenge-thirty
                    <br> professionals, creators of unique internet project, We <br> deliver unconv.</p>
                <div>
                    <div class="d-flex flex-wrap align-items-start justify-content-lg-start justify-content-center mb-md-0 mb-4  cloneable allow-drop my-6">
                       <div class="action-features-bubbles col-md-2 col-12">
                            <i class="mw-micon-solid-Network action-features-icon safe-element"></i>
                       </div>
                        <div class="mb-3 nodrop col-md-10 col-12">
                            <h4 class="mb-2">First Working Process</h4>
                            <p style="color: #8C93A4;">We are idea generators, goaal seekers, <br> challenge-thirty professionals, creators of
                                <br> unique internet project</p>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-start justify-content-lg-start justify-content-center mb-md-0 mb-4 cloneable allow-drop my-6">
                        <div class="action-features-bubbles col-md-2 col-12">
                            <i class="mw-micon-solid-People-onCloud action-features-icon safe-element"></i>
                        </div>
                        <div class="mb-3 nodrop col-md-10 col-12">
                            <h4 class="mb-2">Dedicted Team</h4>
                            <p style="color: #8C93A4;">We are idea generators, goaal seekers, <br> challenge-thirty professionals, creators of
                                <br> unique internet project</p>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-start justify-content-lg-start justify-content-center mb-md-0 mb-4 cloneable allow-drop my-6">
                        <div class="action-features-bubbles col-md-2 col-12">
                            <i class="mw-micon-solid-Support action-features-icon safe-element"></i>
                        </div>
                        <div class="mb-3 nodrop col-md-10 col-12">
                            <h4 class="mb-2">24/7 Hours Support</h4>
                            <p style="color: #8C93A4;">We are idea generators, goaal seekers, <br> challenge-thirty professionals, creators of
                                <br> unique internet project</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10 col-xl-6 mx-auto order-1 order-xl-2 position-relative mb-5">
                <div class="img-as-background allow-drop" style="height: 100%;">
                    <img src="<?php print template_url(); ?>assets/img/layouts/action/action-features.png" class=" position-relative "/>
                </div>

                <img src="<?php print template_url(); ?>assets/img/layouts/action/action-features-2.png" class="position-md-absolute d-md-block d-none action-graph-img "/>

            </div>
        </div>
    </div>
</section>
