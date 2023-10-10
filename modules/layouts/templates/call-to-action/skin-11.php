<?php

/*

type: layout

name: Call to action 11

position: 11

categories: Call to Action

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

<section class="section <?php print $layout_classes; ?> edit nodrop" field="layout-call-to-action-skin-11-<?php print $params['id'] ?>" rel="module">


    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node"></div>
        <div class="mw-layout-background-overlay"></div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-lg-8 mx-auto text-center allow-drop">
                <h1 class="mb-5">Converter iPod Video Taking Portable Video Viewing To A Whole New Level</h1>
                <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
