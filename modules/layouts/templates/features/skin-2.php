<?php

/*

type: layout

name: Feature 2

position: 2

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


<section class="section features-skin-2 <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container edit   " field="layout-feature-skin-2-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center safe-mode">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">The Feature Title</h4>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element text-center safe-mode background-color-element">
                <i class="features-skin-2-icons mb-2 safe-element mw-micon-Add-User"></i>

                <div class="text-center mt-6 allow-drop">
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
                    <module class="mt-md-4 mt-3" type="btn" button_style="btn-outline-primary   " button_size="btn-md" text="Learn More"/>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element text-center safe-mode background-color-element">
                <i class="features-skin-2-icons mb-2 safe-element mw-micon-Add-UserStar"></i>

                <div class="text-center mt-6 allow-drop">
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
                    <module class="mt-md-4 mt-3" type="btn" button_style="btn-outline-primary   " button_size="btn-md" text="Learn More"/>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable element text-center safe-mode background-color-element">
                <i class="features-skin-2-icons mb-2 safe-element mw-micon-Administrator"></i>

                <div class="text-center mt-6 allow-drop">
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
                    <module class="mt-md-4 mt-3" type="btn" button_style="btn-outline-primary   " button_size="btn-md" text="Learn More"/>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
