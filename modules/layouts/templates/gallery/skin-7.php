<?php

/*

type: layout

name: Gallery 7

position: 7

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


<section class="section  no-typing <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element allow-drop container edit"  field="layout-gallery-skin-7-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="mx-auto col-sm-5 col-md-3 mb-md-5 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg"/>
                </div>
                <div class="allow-drop py-4 mt-md-auto">
                    <h5 class="mb-2">Pictures In The Sky</h5>
                    <p>History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-md-5 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg"/>
                </div>
                <div class="allow-drop py-4 mt-md-auto">
                    <h5 class="mb-2">Radio Astronomy</h5>
                    <p>History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-md-5 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg"/>
                </div>
                <div class="allow-drop py-4 mt-md-auto">
                    <h5 class="mb-2">The Amazing Hubble</h5>
                    <p>History of modern astronomy, there is probably no one.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-md-5 cloneable element no-typing">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg"/>
                </div>
                <div class="allow-drop py-4 mt-md-auto">
                    <h5 class="mb-2">Look Up In The Sky</h5>
                    <p>History of modern astronomy, there is probably no one.</p>
                </div>
            </div>
        </div>
    </div>

   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
