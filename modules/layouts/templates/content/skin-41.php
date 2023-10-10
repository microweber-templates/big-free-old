<?php

/*

type: layout

name: Content 41

position: 41

categories: Content

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

<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container-fluid px-0 mw-layout-container no-element allow-drop edit nodrop" field="layout-content-skin-41-<?php print $params['id'] ?>" rel="module">
        <div class="row mh-650">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto   mh-400" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-41.jpg');"></div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center">
                <div class="container-fluid-right-col-in-container">
                    <div class="allow-drop text-center ps-lg-5">
                        <h5 class="mb-4  ">Look Up In The Sky</h5>
                        <h3 class="mb-4">The Basics Of Buying A Telescope</h3>

                        <p class="lead">To ensure the blackest blacks and sharpest colors on every print job, the Eclipse OEM-compatible toner cartridges use just premium</p>
                        <br/>

                        <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
