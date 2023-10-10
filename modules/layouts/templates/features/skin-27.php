<?php

/*

type: layout

name: Feature 27

position: 27

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

<section class="section <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-27-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row mb-3 py-4 text-center text-sm-start">
            <div class="mx-auto col-sm-10 mb-md-5 cloneable element background-color-element safe-mode d-block d-sm-flex align-items-center gap-5 p-sm-4">
                   <div class="mb-md-0 mb-3">
                       <i class="safe-element mw-micon-Add-Window" style="font-size: 82px;"></i>
                   </div>

                   <div>
                       <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                       <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">Arrange your room for optimal picture and sound by reducing screen and hard surface reflections. Do not forget the TV picture is not very pretty when light is reflecting off the screen. Also, audio is not so wonderful when sound waves are reflecting off hard surfaces like bare walls and windows.</p>
                   </div>
            </div>


            <div class="mx-auto col-sm-10 mb-md-5 cloneable element background-color-element safe-mode d-block d-sm-flex align-items-center gap-5 p-sm-4">
                <div class="mb-md-0 mb-3">
                    <i class="safe-element  mw-micon-Approved-Window" style="font-size: 82px;"></i>
                </div>

                <div>
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">Arrange your room for optimal picture and sound by reducing screen and hard surface reflections. Do not forget the TV picture is not very pretty when light is reflecting off the screen. Also, audio is not so wonderful when sound waves are reflecting off hard surfaces like bare walls and windows.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-10 mb-md-5 cloneable element background-color-element safe-mode d-block d-sm-flex align-items-center gap-5 p-sm-4">
                <div class="mb-md-0 mb-3">
                    <i class="safe-element mw-micon-Arrow-Loop" style="font-size: 82px;"></i>
                </div>

                <div>
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-2">Arrange your room for optimal picture and sound by reducing screen and hard surface reflections. Do not forget the TV picture is not very pretty when light is reflecting off the screen. Also, audio is not so wonderful when sound waves are reflecting off hard surfaces like bare walls and windows.</p>
                </div>
            </div>

        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
