<?php
/*

type: layout

name: Header 24

position: 24

categories: Header


 */
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section mw-layout-dark-background py-0 mw-layout-parallax d-flex align-items-center justify-content-center">
    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/hero.jpg"/>
    <div class="mw-layout-container container mh-100vh d-flex align-items-center justify-content-center no-element edit nodrop no-typing no-select" field="layout-header-skin-24-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">

            <div class="col-12  safe-mode  d-flex flex-column justify-content-center align-items-center  allow-drop">
                <div class="allow-select">
                    <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title display-1 mb-lg-3" style="font-weight: 800; letter-spacing: 8px;">CATHERINE<br class="d-lg-none"><span class="text-dark"> & </span><br class="d-lg-none">OLIVER</h1>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p lead-2" style="font-weight: 400;">12th of July. Downtown Brooklyn, New York.</p>


                </div>
            </div>
        </div>
    </div>
</section>





