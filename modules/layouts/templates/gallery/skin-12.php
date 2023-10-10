<?php

/*

type: layout

name: Gallery 12

position: 12

categories: Gallery

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


<section class="section <?php print $layout_classes; ?>  nodrop" >

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container edit" field="layout-gallery-skin-12-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto mb-4 allow-drop">
                <h3>
                    An Awesome Title Related With This Great Images <br>
                    Ordered on Gallery
                </h3>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 d-flex align-items-start align-items-lg-center order-3 order-lg-1 my-lg-6">
                <div class="img-as-background nodrop square w-100  ">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg" class=""/>
                </div>
            </div>

            <div class="col-12 col-lg-7 mx-auto order-1 order-lg-2">
                <div class="row">
                    <div class="col-md-9 d-flex align-items-center">
                        <div class="img-as-background nodrop w-100 h-300   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-7.jpg" class=""/>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <div class="img-as-background nodrop square w-100   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-6.jpg" class=""/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 d-flex align-items-start">
                        <div class="img-as-background nodrop square w-100   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg" class=""/>
                        </div>
                    </div>
                    <div class="col-md-9 d-flex align-items-center">
                        <div class="img-as-background nodrop w-100 h-300   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg" class=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-center order-2 order-lg-3 ms-auto mb-6 mb-lg-0 my-lg-6">
                <div class="img-as-background nodrop square w-100  ">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg" class=""/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
