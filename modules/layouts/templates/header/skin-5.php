<?php

/*

type: layout

name: Header 5

position: 5

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

<section class="section mw-layout-dark-background py-0 d-flex align-items-center justify-content-center">
    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg" id="background-layout--<?php print $params['id'] ?>" />
    <div class="mw-layout-container container-fluid mh-100vh d-flex align-items-center justify-content-center no-element edit nodrop no-typing no-select" field="layout-header-skin-5-<?php print $params['id'] ?>" rel="module">
        <div class="row allow-select">
            <div class="col-12  safe-mode  mx-auto allow-drop">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

                <div class="row nodrop d-flex justify-content-center justify-content-lg-start mt-5">
                    <a href="#" class="px-0 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-1.jpg" class="  cloneable"/></a>
                    <a href="#" class="px-0 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-2.jpg" class="  cloneable"/></a>
                </div>
            </div>

            <div class="position-absolute bottom-0 w-100 text-center left-0">
                <a href="#" class="btn btn-primary   btn-icon btn-lg text-opacity-7 mb-7 cloneable"><i class="mdi mdi-chevron-down icon-size-24px me-0"></i></a>
            </div>
        </div>
    </div>
</section>
