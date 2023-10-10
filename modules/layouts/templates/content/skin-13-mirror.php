<?php

/*

type: layout

name: Content 13 Mirror

position: 13 mirror

categories: Content

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


<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop edit" field="layout-content-skin-13-mirror-<?php print $params['id'] ?>" rel="module">
        <div class="row no-typing">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto py-5 order-1 order-lg-2">
                <div class="d-flex flex-column ps-md-5 h-100 allow-drop py-5">
                    <h3>The Basics Of Buying A Telescope</h3>

                    <p class="lead">Having used discount toner cartridges for twenty years, there have been a lot of changes in the toner cartridge market. The market today is approximately a twenty billion.</p>

                    <module type="btn" text="Lean more" button_style="btn-link"/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto order-2 order-lg-1">
                <div class="col-md-12 text-end py-5">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                        <div class="m-4 d-flex d-sm-block">
                            <div class=" content-13-images w-250 h-250   ms-auto mb-6 me-3 me-sm-0" style="background-image:url('<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg');"></div>

                            <div class=" content-13-images w-150 h-150   ms-auto" style="background-image:url('<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg');"></div>
                        </div>

                        <div class="m-4">
                            <div class=" content-13-images w-350 h-350  " style="background-image:url('<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg'); "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
