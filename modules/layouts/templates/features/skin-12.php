<?php

/*

type: layout

name: Feature 12

position: 12

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
    .hover-bg-body:hover .bg-body {
        background: #0055ff !important;
        color: #fff;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-12-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center mb-4">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop safe-mode">
                <h6 data-mwplaceholder="<?php _e('Enter title here'); ?>">When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts.</h6>
            </div>
        </div>

        <div class="row mb-3 py-4 text-center text-sm-start d-flex justify-content-center">
            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable element background-color-element safe-mode">
                <div class="d-flex flex-column border p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Aerobics-3"></i>
                    </div>
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable element background-color-element safe-mode">
                <div class="d-flex flex-column border p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Aries-2"></i>
                    </div>
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable element background-color-element safe-mode">
                <div class="d-flex flex-column border p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Balloon"></i>
                    </div>
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable element background-color-element safe-mode">
                <div class="d-flex flex-column border p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Batman-Mask"></i>
                    </div>
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
