<?php

/*

type: layout

name: Grid 13

position: 13

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

<section class="section <?php print $layout_classes; ?> edit  safe-mode no-typing nodrop cloneable element safe-mode layouts-grids-background" field="layout-grids-skin-13-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container safe-mode">
        <div class="row">
            <div class="col-12 col-lg-8 mb-2 cloneable element safe-mode">
                <div class="cube">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">The Amazing Hubble</h3>
                    <p data-mwplaceholder="<?php _e('Enter title here'); ?>">When television was young, there was a hugely popular show based on the still popular functional character of Superman. The opening of that show had a familiar phrase that went.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-2 cloneable element safe-mode">
                <div class="cube">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Radio Astronomy</h3>
                    <p data-mwplaceholder="<?php _e('Enter title here'); ?>">There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
