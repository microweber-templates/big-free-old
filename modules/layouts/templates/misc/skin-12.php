<?php

/*

type: layout

name: Mics 12

position: 12

categories: Misc

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="misc-12 d-flex <?php print $layout_classes; ?> edit  nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container align-self-center allow-drop">
        <module type="accordion" template="misc-12"/>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
