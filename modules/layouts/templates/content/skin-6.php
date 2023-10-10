<?php

/*

type: layout

name: Content 6

position: 6

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


<section class="section <?php print $layout_classes; ?> edit nodrop" field="layout-content-skin-6-<?php print $params['id'] ?>" rel="module">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">The Amazing Team</h3>
            </div>
        </div>


        <div class="row text-center mt-7">
            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element background-color-element safe-mode">
                <div class="img-as-background rounded-circle square">
                    <img class="h-100 w-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Some Title Here</h4>
                    <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element background-color-element safe-mode">
                <div class="img-as-background rounded-circle square">
                    <img class="h-100 w-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Some Title Here</h4>
                    <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element background-color-element safe-mode">
                <div class="img-as-background rounded-circle square">
                    <img class="h-100 w-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Some Title Here</h4>
                    <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
