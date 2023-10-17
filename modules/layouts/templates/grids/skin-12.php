<?php

/*

type: layout

name: Grid 12

position: 12

categories: Grids

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

if (page_title()) {
    $title = page_title();
}
?>


<section class="section <?php print $layout_classes; ?> edit  safe-mode no-typing nodrop" field="layout-grids-skin-12-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container safe-mode">


        <div class="row">
            <div class="col-12 col-lg-6 mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="cube">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Look Up In The Sky</h3>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble. While NASA has had many ups and downs.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="cube">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">How To Look Up</h3>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble. While NASA has had many ups and downs.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
