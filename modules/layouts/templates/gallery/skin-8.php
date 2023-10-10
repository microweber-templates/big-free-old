<?php

/*

type: layout

name: Gallery 8

position: 8

categories: Gallery

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
    <div class="mw-layout-container no-element allow-drop container  edit" field="layout-gallery-skin-8-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="mx-auto col-sm-10 col-md-6 mb-2 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg"/>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 mb-2 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg"/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
