<?php

/*

type: layout

name: Content 25

position: 25

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


<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop edit no-typing" field="layout-content-skin-25-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="row mb-3 py-4 safe-mode">
                    <div class="col border-start border-left-3 border-dark pt-2 d-flex flex-column cloneable element background-color-element element safe-mode allow-drop">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Awesome Title</h5>
                        <br>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Did you know that you should try not to sneeze too strongly. Why? A very powerful sneeze has the ability to cause a fracture in your ribcage. </p>
                    </div>

                    <div class="col border-start border-left-3 border-dark pt-2 d-flex flex-column cloneable element background-color-element element safe-mode allow-drop">
                        <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Awesome Title</h5>
                        <br>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall utility and even when.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-10.jpg"/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
