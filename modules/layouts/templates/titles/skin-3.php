<?php

/*

type: layout

name: Titles 3

position: 3

categories: Titles

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-titles-skin-3-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h3>The future is here and belongs to you. Every dreamer is important for the universe</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
        </div>
    </div>
</section>
