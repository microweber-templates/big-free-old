<?php

/*

type: layout

name: Gallery 4

position: 4

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




<section class="section <?php print $layout_classes; ?>  " >

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element container edit" id="layout-container<?php print $params['id'] ?>"  field="layout-gallery-skin-4-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center nodrop">
            <div class="mx-auto col-sm-10 col-md-4 cloneable mb-md-5 mb-0 py-md-2 py-md-0 element"  >
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg"/>
                </div>
                <div class="allow-drop py-md-4 py-2 mt-md-auto safe-element allow-drop">
                    <h5 class="mb-2">Image Title</h5>
                    <p>A short description of the image.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-4 cloneable mb-md-5 mb-0 py-md-2 py-md-0 element">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg"/>
                </div>
                <div class="allow-drop py-md-4 py-2 mt-md-auto safe-element allow-drop">
                    <h5 class="mb-2">Image Title</h5>
                    <p>A short description of the image.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-4 cloneable mb-md-5 mb-0 py-md-2 py-md-0 element">
                <div class="img-as-background nodrop square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg"/>
                </div>
                <div class="allow-drop py-md-4 py-2 mt-md-auto safe-element allow-drop">
                    <h5 class="mb-2">Image Title</h5>
                    <p>A short description of the image.</p>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
