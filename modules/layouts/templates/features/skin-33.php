<?php

/*

type: layout

name: Feature 33

position: 33

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
    .hover-  :hover {
        border-color: transparent !important;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-33-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row m-1 text-center text-sm-start">
            <div class="mx-auto col-sm-10 col-md-6 col-lg-6 mb-4 px-1 cloneable element background-color-element safe-mode">
                <div class="h-100 d-flex flex-column border border-color-primary p-5 mx-3 allow-drop safe-mode">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Internet Advertising What Went Wrong</h3>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own</p>
                    <br />
                    <module type="btn" button_text="Explore" button_style="btn-primary"/>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-6 mb-4 px-1 cloneable element background-color-element safe-mode">
                <div class="h-100 d-flex flex-column border border-color-primary p-5 mx-3 allow-drop safe-mode">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Internet Advertising What Went Wrong</h3>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own</p>
                    <br />
                    <module type="btn" button_text="Explore" button_style="btn-primary"/>

                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
