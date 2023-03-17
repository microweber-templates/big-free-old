<?php

/*

type: layout

name: Background 7

position: 7

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

<div class="animation-backgrounds-7">
    <section class="section bg-animation py-0 position-relative h-100vh " style="background-color: unset;">


        <article class="wrapper">
            <div class="  mh-100vh d-flex align-items-center">
                <div class="container-fluid    <?php print $layout_classes; ?> edit safe-mode nodrop  " field="layout-animation-bg-skin-7-<?php print $params['id'] ?>" rel="module">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                            <h1 class="header-section-title  mb-3" style="color: #ffffff;">Describe your company </h1>
                            <p class="header-section-p lead" style="color: #ffffff;">Describe your company and services with few words and explain why you are the best choice.</p>
                            <br>
                            <module type="btn" button_style="btn-primary" text="See more"/>

                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>
</div>
