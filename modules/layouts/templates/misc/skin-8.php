<?php

/*

type: layout

name: Misc 8

position: 8

categories: Misc

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

<section class="section <?php print $layout_classes; ?> edit allow-drop" field="layout-misc-skin-8-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center py-5 col-12">
            <div class="col mb-5 cloneable align-self-center">
                <img src="<?php print template_url(); ?>assets/img/layouts/Amazon2.png">
            </div>
            <div class="col mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Facebook2.png">
            </div>
            <div class="col mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Google2.png">
            </div>
            <div class="col mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/LinkedIn2.png">
            </div>
            <div class="col mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Logitech.png">
            </div>
            <div class="col mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Philips.png">
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
