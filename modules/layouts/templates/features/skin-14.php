<?php
/*

  type: layout

  name: Feature 14

  position: 14

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

<section class="section    <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-14-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row d-flex justify-content-center text-center text-md-start">
            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="border bg-body p-5">
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="d-flex align-items-center">
                            <i class="me-4 d-inline-block safe-element mw-micon-Bow-5" style="font-size: 35px;"></i>
                            Features Title</h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Before we discuss all of the things that could be affecting your PC’s </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="border  bg-body p-5">
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="d-flex align-items-center">
                            <i class="me-4 d-inline-block safe-element mw-micon-Aim" style="font-size: 35px;"></i> Features Title
                        </h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Before we discuss all of the things that could be affecting your PC’s </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="border  bg-body p-5">
                    <div class="allow-drop safe-mode">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="d-flex align-items-center">
                            <i class="me-4 d-inline-block safe-element mw-micon-Bow-6" style="font-size: 35px;"></i> Features Title
                        </h5>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Before we discuss all of the things that could be affecting your PC’s </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
