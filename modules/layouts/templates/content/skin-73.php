<?php

/*

type: layout

name: Content 73

position: 73

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


<section class="section <?php print $layout_classes; ?> section-content-73 edit safe-mode nodrop" field="layout-content-skin-73-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4 mx-auto text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <div class="d-inline nodrop">
                        <h1 class="content-73-h1">Every transaction is secial for us.</h1>
                        <br>
                    </div>

                    <p class="content-73-p">Aiciatis unde omnis iste natus error sit <br> voluptatem accusantium doloremque laudan.</p>
                    <br/>
                    <module type="btn" text="Get Started" button_style="content-73-btn" button_size=""/>
                </div>
            </div>

            <div class="col-12 col-lg-4 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-center pb-5 allow-drop position-relative">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-73-image-1.png" class="content-73-image"/>
                    <div class="box-into-image position-lg-absolute d-flex align-items-center">
                        <div>
                            <i class="mdi mdi-checkbox-marked-circle-outline me-4 d-block safe-element "></i>

                        </div>
                       <div>
                           <h6 class="text-start mb-0">Bulk Export</h6>
                           <p class="mb-0" style="color: #575455; font-weight: 300; font-size: 14px;">Work faster 200%</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mt-5">
            <div class="mb-5 cloneable">
                <div class="text-center mx-auto d-flex col-lg-9  mt-6 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-73-image-brand.png" class="content-73-image"/>

                </div>
            </div>
        </div>
    </div>
</section>
