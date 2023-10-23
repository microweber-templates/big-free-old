<?php

/*

type: layout

name: Titles 1

position: 1

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-titles-skin-1-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center mb-5">
            <div class="col-lg-10 mx-auto">
                <h1 class="mb-3">Design Concept</h1>
                <p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
