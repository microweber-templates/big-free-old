<?php

/*

type: layout

name: Team 12

position: 12

categories: Team

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit    nodrop" field="layout-team-skin-12-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <section class="section <?php print $layout_classes; ?>">
        <module type="background" id="background-layout--<?php print $params['id'] ?>" />
        <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
        <div class="mw-layout-container no-element allow-drop container edit    nodrop" field="layout-team-skin-12-<?php print $params['id'] ?>" rel="module">

            <module type="teamcard" template="skin-12"/>
        </div>
        <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />
    </section>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
