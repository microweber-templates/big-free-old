<?php

/*

type: layout

name: Grid 7

position: 7

categories: Grids

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

if (page_title()) {
    $title = page_title();
}
?>



<section class="section <?php print $layout_classes; ?> edit    nodrop" field="layout-grids-skin-7-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/grid-9.png">
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
