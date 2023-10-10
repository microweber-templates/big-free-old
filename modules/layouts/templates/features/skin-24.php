<?php

/*

type: layout

name: Feature 24

position: 24

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

<section class="section <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-24-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto text-center allow-drop">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h3>

                <div class="py-4 text-center nodrop">
                    <div class="col-sm-10 mx-auto mb-md-4 cloneable element background-color-element safe-mode">
                        <div class="allow-drop">
                            <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">How To Meet That Special Someone</h5>
                            <p data-mwplaceholder="<?php _e('Enter text here'); ?>">If you are looking for a new way to promote your business that won’t cost you more money, maybe printing is one of the options you won’t resist.</p>
                        </div>
                    </div>

                    <div class="col-sm-10 mx-auto mb-md-4 cloneable element background-color-element safe-mode">
                        <div class="allow-drop">
                            <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">How To Meet That Special Someone</h5>
                            <p data-mwplaceholder="<?php _e('Enter text here'); ?>">If you are looking for a new way to promote your business that won’t cost you more money, maybe printing is one of the options you won’t resist.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
