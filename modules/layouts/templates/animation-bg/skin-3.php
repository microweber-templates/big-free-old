<?php

/*

type: layout

name: Background 3

position: 3

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

<style>

</style>

<div class="animation-backgrounds-3">
    <section class="section bg-animation py-0 position-relative h-100vh ">
            <div class="background">
                <div class="  mh-100vh d-flex align-items-center">
                    <div class="container    <?php print $layout_classes; ?> edit safe-mode nodrop  " field="layout-animation-bg-skin-3-<?php print $params['id'] ?>" rel="module">
                        <div class="row text-center">
                            <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                                <h1 class="header-section-title mb-3" style="color: #ffffff;">Describe your company </h1>
                                <p class="header-section-p lead" style="color: #ffffff;">Describe your company and services with few words and explain why you are the best choice.</p>
                                <br>
                                <module type="btn" button_style="btn-primary" text="See more"/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
                <div class="cube"></div>
            </div>
    </section>
</div>
