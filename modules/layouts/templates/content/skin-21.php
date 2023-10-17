<?php

/*

type: layout

name: Content 21

position: 21

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
    <div class="container mw-layout-container no-element allow-drop edit " field="layout-content-skin-21-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 mx-auto d-flex align-items-center background-color-element element">
                <div class="row">
                    <div class="col-auto pe-7 icon-size-64px cloneable element safe-mode no-typing">
                        <i class="mdi mdi-flash-circle safe-element mb-5 d-block"></i>
                    </div>

                    <div class="col allow-drop">
                        <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Awesome Title</h3>

                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">One of the earliest activities we engaged in when we first got into astronomy is the same one we like to show our children just as soon as their excitement about the night sky begins to surface. That is the fun of finding constellations. But finding constellations and using them to navigate the sky is a discipline.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
