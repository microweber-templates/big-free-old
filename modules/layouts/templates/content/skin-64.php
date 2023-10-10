<?php

/*

type: layout

name: Content 64

position: 64

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-40';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>




</style>


<section class="py-0 mw-layout-container">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" height="120px" />

    <div class="container mw-layout-container no-element allow-drop edit nodrop" field="layout-content-skin-64-<?php print $params['id'] ?>" rel="module" >
        <div class="row text-center <?php print $layout_classes; ?>  mb-5 nodrop">
            <div class="col-lg-10 mx-auto allow-drop">
                <h3 class="mb-3">Design Concept</h3>
                <p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
        </div>

        <div class="row">

            <div class="d-flex cloneable pb-5">
                <div class="col-sm-10 p-0 col-lg-6 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-22.jpg" />
                </div>

                <div class="col-12 col-sm-10 col-lg-6 px-0 text-center  d-flex align-items-center">
                    <div class="allow-drop p-5">
                        <h5>How To Meet That Special Someone</h5>

                        <p class="lead mb-0">There is no better advertisement campaign that is low cost and also successful at the same time. Great business ideas when utilized effectively can save lots of money. This is not only easy for those who work full-time as an advertiser, but also for those.</p>

                    </div>
                </div>
            </div>

            <div class="d-flex cloneable pb-5">
                <div class="col-sm-10 p-0 col-lg-6 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-22.jpg"/>
                </div>

                <div class="col-12 col-sm-10 col-lg-6 px-0 text-center  d-flex align-items-center">
                    <div class="allow-drop p-5">
                        <h5>How To Meet That Special Someone</h5>

                        <p class="lead mb-0">There is no better advertisement campaign that is low cost and also successful at the same time. Great business ideas when utilized effectively can save lots of money. This is not only easy for those who work full-time as an advertiser, but also for those.</p>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" height="120px" />
</section>
