<?php

/*

type: layout

name: Grid 8

position: 8

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

<section class="section <?php print $layout_classes; ?> edit    nodrop" field="layout-grids-skin-8-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>Moon Fever</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>Telescopes 101</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>The Night Sky</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>Radio Astronomy</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>The Anazubg Hubble</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2 cloneable">
                <div class="cube">
                    <h6>Look Up In The Sky</h6>
                    <p>There is a lot of exciting stuff going on in the stars above us that make astronomy so much fun.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
