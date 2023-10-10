<?php

/*

type: layout

name: Header 20

position: 20

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


<section class="section py-0 d-flex align-items-center justify-content-center">
    <module type="background"/>
    <div class="mw-layout-container container mh-100vh d-flex align-items-center justify-content-center no-element edit nodrop no-typing no-select" field="layout-header-skin-16-<?php print $params['id'] ?>" rel="module">
        <div class="row">

            <div class="col-12  safe-mode  col-sm-10 col-lg-6 me-auto mb-5">
                <img class="allow-select mh-500" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-14.jpg" />
            </div>

            <div class="col-12  safe-mode  col-sm-10 col-lg-6 text-center ms-auto text-lg-start d-flex align-items-center mb-5 allow-drop">
                <div class="allow-select">
                    <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

                    <br/>
                    <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Read More"/>

                </div>
            </div>
        </div>
    </div>
</section>
