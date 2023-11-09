<?php

/*

type: layout

name: Text block 1

position: 1

categories: Text block

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


<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container edit     " field="layout-text-block-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop    safe-mode">
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Like rock stars, asteroids have been given their fair share of urban myth and lore. Many have attributed the extinction of the dinosaurs to the impact of a huge asteroid on the earth.Like rock stars, asteroids have been given their fair share of urban myth and lore. ‌Many have attributed the extinction of the dinosaurs to the impact of a huge asteroid on the earth.Like rock stars, asteroids have been given their fair share of urban myth and lore. ‌Many have attributed the extinction of the dinosaurs to the impact of a huge asteroid on the earth. </p>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
