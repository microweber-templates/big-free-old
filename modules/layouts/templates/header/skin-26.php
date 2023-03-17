<?php

/*

type: layout

name: Header 26

position: 26

categories: Header


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


<section class="section <?php print $layout_classes; ?> py-5 edit safe-mode nodrop" field="layout-header-skin-26-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder mh-700 d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/tony/home-content-bg-6.png');     background-position: center bottom;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mx-auto mb-10">
                    <div class="text-center">
                        <h2 class="mb-4">Start design explore today</h2>
                        <p class="tony-p-gray-style ">Cap table cleanup you've got marvelous design.</p>

                        <module type="btn" button_style="btn-outline-dark" button_size="btn-md px-5 py-4 mt-2" text="Start now"/>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
