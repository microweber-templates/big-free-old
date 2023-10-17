<?php

/*

type: layout

name: Grid 11

position: 11

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

<section class="section <?php print $layout_classes; ?> edit  safe-mode no-typing nodrop" field="layout-grids-skin-11-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container safe-mode">
        <div class="row">
            <div class="col-12 col-lg-12 mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="cube text-center">
                    <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>">Asteroids</h1>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">When television was young, there was a hugely popular show based on the still<br> popular functional character of Superman. The opening of that show had a familiar<br> phrase that went.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
