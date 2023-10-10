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

<section class="section <?php print $layout_classes; ?> edit    nodrop" field="layout-grids-skin-11-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-2 cloneable">
                <div class="cube">
                    <h3>Look Up In The Sky</h3>
                    <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble. While NASA has had many ups and downs.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-2 cloneable">
                <div class="cube">
                    <h3>How To Look Up</h3>
                    <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble. While NASA has had many ups and downs.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
