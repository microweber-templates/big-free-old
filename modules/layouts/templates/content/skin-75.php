<?php

/*

type: layout

name: Content 75

position: 75

categories: Content

*/

?>

<style>


    .tony-template-content-2-boxes {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border: 1px solid #DCE2E7;
        padding: 20px;
        margin: 20px 10px;
        cursor: pointer;
        border-radius: 3px;
        background-color: #ffffff;
    }

    .tony-template-content-2-boxes:hover {
        border-color: transparent;
        box-shadow: unset;
    }


    .tony-p-gray-style {
        color: #7E8495;
        font-size: 20px;
    }

    .home-1-content-span-label {
        background-color: #1E2432;
        padding: 8px 20px;
        color: white;
        font-size: 12px;
        font-weight: 300;
    }

    .home-1-content-span-label-2 {
        background-color: #F5F7FD;
        padding: 8px 30px 8px 10px;
        color: #1E2432;
        font-size: 14px;
        font-weight: 400;
    }

</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-75-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-12 d-xl-flex mx-auto">
                <div class="col-12 col-xl-5 mx-auto pt-5 text-center text-lg-start d-flex align-item">
                    <div class="allow-drop">
                        <h2 class="pb-7">Design Agency Network</h2>

                        <p class="tony-p-gray-style pb-4">We are a specialist agency in manufacturing design for <br> personal and corporate brands</p>

                        <module type="btn" button_style="btn-link" button_size="btn-md mt-4" text="Learn More"/>

                    </div>
                </div>

                <div class="col-12 col-xl-7">
                    <div class="background-image-holder mh-450 d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/tony/home-content-bg-2.png'); background-size: contain;" >
                        <div class="col-lg-7 col-md-8 col-12 mx-auto home-2-content-right">
                            <div class="col-md-12 d-md-flex justify-content-center">
                                <div class="col-md-6 col-12" style="position: relative; bottom: 40px;">
                                    <div class="tony-template-content-2-boxes d-flex flex-column justify-content-center align-items-start text-start">
                                        <h4 class="mt-2 mb-0">600+</h4>
                                        <p class="tony-p-gray-style" style="font-size: 16px;">Skilled and motivate staff</p>
                                    </div>

                                    <div class="tony-template-content-2-boxes d-flex flex-column justify-content-center align-items-start text-start">
                                        <h4 class="mt-2 mb-0">43</h4>
                                        <p class="tony-p-gray-style" style="font-size: 16px;">Offices in worldwide</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="tony-template-content-2-boxes d-flex flex-column justify-content-center align-items-start text-start">
                                        <h4 class="mt-2 mb-0">1750+</h4>
                                        <p class="tony-p-gray-style" style="font-size: 16px;">Successful projects</p>
                                    </div>

                                    <div class=" tony-template-content-2-boxes d-flex flex-column justify-content-center align-items-start text-start">
                                        <h4 class="mt-2 mb-0">700+</h4>
                                        <p class="tony-p-gray-style" style="font-size: 16px;">Client worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
