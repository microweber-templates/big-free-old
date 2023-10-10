<?php

/*

type: layout

name: CLEAN CONTAINER

position: 0

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> nodrop clean-container edit" field="layout-skin-1-<?php print $params['id'] ?>" rel="module">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element allow-drop container">
        <div class="row">
            <div class="col-12 allow-drop">
                <h1 class="element" data-mwplaceholder="Enter your title here"></h1>

                <p class="element" data-mwplaceholder="This is sample text for your page"></p>
            </div>
        </div>
    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
