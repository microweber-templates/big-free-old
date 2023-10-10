<?php

/*

type: layout

name: Call to action 16

position: 16

hidden: true

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

<section class="section    <?php print $layout_classes; ?> edit nodrop" field="layout-call-to-action-skin-16-<?php print $params['id'] ?>" rel="module">


    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node"></div>
        <div class="mw-layout-background-overlay"></div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-lg-12 mx-auto">
                <div class="row bg-body   px-5 py-2 d-block d-md-flex justify-content-between align-items-center">
                    <div class="py-4 col text-center text-md-start allow-drop"><h4 class="m-0">New version is avaliable</h4></div>
                    <div class="py-4 col-auto text-center text-md-start allow-drop"><p class="m-0">Get it now... it is free!</p></div>
                    <div class="py-4 col text-center text-md-end allow-drop">
                        <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" button_text="Download"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
