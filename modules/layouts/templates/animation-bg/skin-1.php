<?php

/*

type: layout

name: Background 1

position: 1

categories: Animated Backgrounds

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<div class="animation-backgrounds-1">
    <section class="section bg-animation py-0  <?php print $layout_classes; ?> edit   nodrop" field="layout-animation-bg-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="  mh-100vh d-flex align-items-center ">
            <div class="mw-layout-background-block">
                <div class="mw-layout-background-node">

                </div>
                <div class="mw-layout-background-overlay">

                </div>
            </div>
            <div class="container">



 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
                <div class="mw-layout-container no-element allow-drop row text-center">
                    <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                        <h1 class="header-section-title mb-3" style="color: #ffffff;">Describe your company </h1>
                        <p class="header-section-p lead" style="color: #ffffff;">Describe your company and services with few words and explain why you are the best choice.</p>
                        <br>
                        <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>

                    </div>
                </div>
            </div>
        </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
</div>
