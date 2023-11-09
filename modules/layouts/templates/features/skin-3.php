<?php

/*

type: layout

name: Feature 3

position: 3

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
    .hover-  :hover .   {
        background: #fff !important;
    }
</style>

<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container edit   " field="layout-feature-skin-3-<?php print $params['id'] ?>" rel="module">
        <div class="row mb-3 py-4 text-center text-sm-start">
            <div class="col-sm-10 col-md-12 col-lg-6 mb-6 cloneable element ">
                <div class="d-block d-sm-flex align-items-center  border p-sm-5 p-3 background-color-element">
                    <div class="col-3 me-sm-5 mx-auto icon-size-42px" style="width: 80px;">
                        <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="safe-element mw-micon-Alien-2"></i>
                        </div>
                    </div>

                    <div class="col-md-9 allow-drop">
                        <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" >Pictures In The Sky</h4>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>"  class="mb-2">Naturally, as you grow in your love of astronomy, you will</p>
                        <module type="btn" text="Learn More" button_style="btn-primary" class="mt-3" button_size=" "/>

                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-12 col-lg-6 mb-6 cloneable element  ">
                <div class="d-block d-sm-flex align-items-center border p-sm-5 p-3 background-color-element">
                    <div class="col-3 me-sm-5 mx-auto icon-size-42px" style="width: 80px;">
                        <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="safe-element mw-micon-Alien"></i>
                        </div>
                    </div>

                    <div class="col-md-9 allow-drop">
                        <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" >Pictures In The Sky</h4>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">Naturally, as you grow in your love of astronomy, you will</p>
                        <module type="btn" text="Learn More" button_style="btn-primary" class="mt-3" button_size=" "/>
                    </div>
                </div>

            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
