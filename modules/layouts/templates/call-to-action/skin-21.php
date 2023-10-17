<?php

/*

type: layout

name: Call to action 21

position: 21

categories: Call to Action

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
    <div class="mw-layout-container no-element-allow-drop container edit nodrop no-typing" field="layout-call-to-action-skin-21-<?php print $params['id'] ?>" rel="module">
        <div class="row mb-6">
            <div class="col-12 allow-drop text-center safe-mode">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>">More about the event</h1>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Please full the form below to make an on-line reservation</p>

                <div class="d-flex flex-wrap justify-content-center text-center nodrop">
                    <div class="col mb-4 cloneable element background-color-element safe-mode mx-2" style="background-color: #f0f0f0;">
                        <div class="d-block d-sm-flex flex-column align-items-center h-100 text-center justify-content-center allow-drop p-5 safe-mode">
                            <i class="mw-micon-Add-UserStar icon-size-70px mb-4 d-inline-block safe-element no-typing"></i>
                            <p data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">Some text here about</p>
                            <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">10,000</h3>
                        </div>
                    </div>

                    <div class="col mb-4 cloneable element background-color-element safe-mode mx-2" style="background-color: #f0f0f0;">
                        <div class="d-block d-sm-flex flex-column align-items-center h-100 text-center justify-content-center allow-drop p-5 safe-mode">
                            <i class="mw-micon-Address-Book icon-size-70px mb-4 d-inline-block safe-element no-typing"></i>
                            <p data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">Some text here about</p>
                            <h3 data-mwplaceholder="<?php _e('Enter text here'); ?>">32,000</h3>
                        </div>
                    </div>

                    <div class="col mb-4 cloneable element background-color-element safe-mode mx-2" style="background-color: #f0f0f0;">
                        <div class="d-block d-sm-flex flex-column align-items-center h-100 text-center justify-content-center allow-drop p-5 safe-mode">
                            <i class="mw-micon-Air-Balloon icon-size-70px mb-4 d-inline-block safe-element no-typing"></i>
                            <p data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">Some text here about</p>
                            <h3 data-mwplaceholder="<?php _e('Enter text here'); ?>">50,000</h3>
                        </div>
                    </div>

                </div>
                <br>
                <module type="btn" button_style="btn-primary" button_size="px-5" button_text="Subscribe" />

            </div>
        </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
