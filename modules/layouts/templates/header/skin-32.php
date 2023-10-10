<?php

/*

type: layout

name: Header 32

position: 32

categories: Header

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
    #background-layout--<?php print $params['id'] ?> .mw-layout-background-overlay {
        background-color: color-mix(in srgb, var(--headingColor) 50%, transparent);
    }
</style>

<section id="section-<?php print $params['id'] ?>" class="section mw-layout-dark-background py-0 d-flex align-items-center justify-content-center">
    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/layouts/gallery-32.jpg" id="background-layout--<?php print $params['id'] ?>" />
    <div class="mw-layout-container container mh-100vh d-flex align-items-center justify-content-center no-element edit nodrop no-typing no-select" field="layout-header-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center text-white">
            <div class="col-12  safe-mode  mx-auto allow-drop safe-mode allow-select">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7 text-white">Describe your company </h1>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7 text-white">Describe your company and services with few words and explain why you are the best choice.</p>
                <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>
            </div>
        </div>
    </div>
 </section>
