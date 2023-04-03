<?php

/*

type: layout

name: Header 28

position: 28

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .photography-orange-rectangle {
        position: absolute;
        width: 92px;
        height: 120px;
        background-color: #FF7A01;
        z-index: 0;
        cursor: pointer;
    }

    .photography-orange-rectangle.photography-rectangle-bottom-2 {
        bottom: -40px;
        right: -30px;

    }


    .photography-orange-rectangle.photography-rectangle-top-2 {
        top: -40px;
        left: -30px;
    }

    .photography-content-27-bottom-box {
        background-color: #ffffff;
        top: 100px;
        z-index: 1;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
</style>

<section class="section pb-0 edit safe-mode pt-5 mb-8" field="layout-header-skin-28-<?php print $params['id'] ?>" rel="module" style="background-color: #ffffff;">
    <div class="d-flex align-items-center mw-big-skin-3-background">
        <div class="container-fluid <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-xl-between justify-content-center">

                        <div class="col-12 col-xl-5 col-lg-8 allow-drop py-4">
                            <div class="row">
                                <h1 class="header-section-title" style=" font-size: 64px; line-height: 74px;">About Alex Hales</h1>
                                <p class="header-section-p lead mt-3 mb-8" style="color: #8F8BA5;">Capturing the moments that will captivate your heart</p>

                                <div class="col-10 mx-auto position-relative">
                                    <div class=" photography-orange-rectangle photography-rectangle-top-2"> </div>
                                    <img src="<?php print template_url(); ?>assets/img/layouts/photography/photography-Rectangle-5285.png" class="w-100" style="position: relative; z-index: 1;"/>
                                    <div class=" photography-orange-rectangle photography-rectangle-bottom-2"> </div>
                                </div>
                            </div>

                        </div>



                        <div class="ms-md-0 ms-md-5 col-10 col-sm-10 col-md-8 col-xl-5 pt-7 cloneable ">
                            <p class="lead py-7" style="color: #8F8BA5; line-height: 35px;">Photographer and curator based in pasar Rumput. Being sensetive to the small details of the everyday. my work revolves around floating moments and allegorical scenes. Nature, memory, and family are nations that interest me in a symbolic form and their narrative power </p>
                            <p class="lead py-7" style="color: #8F8BA5; line-height: 35px;">Moreever, my humanist approach and idealisation of women set my apart from the other photographers, as  my privileges the soul and the personality</p>

                            <div class="nodrop d-flex align-items-center justify-content-start cloneable mt-4">
                                <module type="btn" button_text="Contact Me" button_style="btn btn-primary px-4 py-3"/>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
