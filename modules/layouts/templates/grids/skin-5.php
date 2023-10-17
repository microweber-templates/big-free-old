<?php

/*

type: layout

name: Grid 5

position: 5

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

<section class="section <?php print $layout_classes; ?> edit  safe-mode no-typing nodrop" field="layout-grids-skin-5-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container safe-mode">
        <div class="row">
            <div class="col-sm  mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/gallery-1-8.jpg">
                </div>
            </div>
            <div class="col-sm mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/gallery-1-9.jpg">
                </div>
            </div>
            <div class="col-sm mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="w-100 cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/gallery-1-13.jpg">
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
