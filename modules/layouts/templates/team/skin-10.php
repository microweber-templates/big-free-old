<?php

/*

type: layout

name: Team 10

position: 10

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

<section class="section <?php print $layout_classes; ?>">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container edit    nodrop" field="layout-team-skin-10-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="allow-drop mb-5">
                <h3>Meet our Team</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Deserunt doloribus ducimus expedita labore non odit quibusdam repellendus sunt.</p>
            </div>
        </div>

        <module type="teamcard" template="skin-10"/>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />
</section>

