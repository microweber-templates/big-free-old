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


<section class="section <?php print $layout_classes; ?> edit    nodrop" field="layout-grids-skin-12-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-2 cloneable">
                <div class="cube"  style="text-align: center;">
                    <h1>Asteroids</h1>
                    <p class="lead">When television was young, there was a hugely popular show based on the still<br> popular functional character of Superman. The opening of that show had a familiar<br> phrase that went.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
