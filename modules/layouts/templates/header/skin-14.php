<?php

/*

type: layout

name: Header 14

position: 14

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


<section class="section mw-layout-dark-background py-0 mw-layout-parallax d-flex align-items-center justify-content-center">
    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/layouts/gallery-1-14.jpg"/>
    <div class="mw-layout-container container mh-100vh d-flex align-items-center justify-content-center no-element edit nodrop no-typing no-select" field="layout-header-skin-14-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">

            <div class="col-12  safe-mode  col-lg-10 col-lg-10 mx-auto allow-drop">
                <div class="allow-select">
                    <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>


                    <div class="me-2 me-lg-4 cloneable element">
                        <module type="btn" button_style="btn-outline-primary" button_size="btn-lg px-5" text="Button"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
