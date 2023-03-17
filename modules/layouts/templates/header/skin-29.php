<?php

/*

type: layout

name: Header 29

position: 29

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
    .merry-header-soundcloud {
        bottom: 54px;
        margin: 0 auto;
        display: flex;
    }

    .merry-header-bottom {
        bottom: 0;
        right: 0;
        width: 100%;
    }
</style>

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode" field="layout-header-skin-29-<?php print $params['id'] ?>" rel="module" style="background-color: #181E4E;">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center mw-big-skin-3-background position-relative">
        <div class="container-fluid mw-layout-overlay-container mb-8 <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-xl-7 allow-drop py-4">
                            <h1 class="header-section-title" style="color: #ffffff; font-size: 62px;">A Podcast To Discuss <br> All Things Related To <br> The Workplace.</h1>
                            <p class="header-section-p lead my-7" style="color: #ffffff;">We Are must explain to you how all this mistaken idea of
                                <br> denouncing pleasure and praising pain was born and I will give you <br> a complete account of the system.</p>

                            <div class="nodrop d-flex align-items-center justify-content-xl-start justify-content-center cloneable mt-8">
                                <div class=" me-3">
                                    <module type="btn" button_style="btn btn-primary" button_size="btn-md px-5 py-4" text="Start Listening"/>

                                </div>
                                <div class="me-1 me-3">
                                    <module type="btn" button_style="btn btn-outline-primary" button_size="btn-md px-5 py-4" text="All Episodes"/>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-12 col-xl-5 py-4 mt-7 cloneable position-relative">
                          <div class="img-as-background h-550">
                              <img style="min-width: unset!important;" src="<?php print template_url(); ?>assets/img/layouts/merry/merry-header-img.png" class=" "/>
                          </div>
                            <img src="<?php print template_url(); ?>assets/img/layouts/merry/soundcloud-merry-header.png" class=" position-xl-relative merry-header-soundcloud"/>

                        </div>

                        <div class="col-xl-12 px-lg-0 d-flex flex-wrap justify-content-center mx-auto py-5 mt-3 position-relative" style="top: 130px;">

                            <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="auto" width="auto" src="<?php print template_url(); ?>assets/img/layouts/merry/whitbread-merry-header-1.png" class=""/></div>
                            <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="auto" width="auto" src="<?php print template_url(); ?>assets/img/layouts/merry/whitbread-merry-header-2.png" class=""/></div>
                            <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="auto" width="auto" src="<?php print template_url(); ?>assets/img/layouts/merry/whitbread-merry-header-3.png" class=""/></div>
                            <div class="col-lg-3 col-md-6 col-12 py-lg-0 py-3 text-center"><img height="auto" width="auto" src="<?php print template_url(); ?>assets/img/layouts/merry/whitbread-merry-header-4.png" class=""/></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img src="<?php print template_url(); ?>assets/img/layouts/merry/bottom-merry-header.png" class="position-absolute merry-header-bottom"/>
    </div>
</section>
