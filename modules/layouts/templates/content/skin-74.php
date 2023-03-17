<?php

/*

type: layout

name: Content 74

position: 74

categories: Content

*/

?>

<style>


    .tony-template-content-1-boxes {
        border: 1px solid black;
        padding: 20px 0px;
        margin: 20px 10px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        border-radius: 1px;
    }

    .tony-template-content-1-boxes:hover {
        border: unset;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transform: scale(1.2);
    }

    .home-1-content-right {
        background-color: #ffffff;
        padding: 40px 0px 30px 0px;
        position: relative;
        bottom: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-radius: 5px;
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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-74-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-12 d-xl-flex mx-auto">
                <div class="col-12 col-xl-5 mx-auto pt-5 text-center text-lg-start d-flex align-item">
                    <div class="allow-drop">
                        <h6 class="mb-5 font-weight-bold"><span class="home-1-content-span-label">NEW</span><span class="home-1-content-span-label-2">Get 15% discount for new member</span></h6>
                        <h1 class="pb-7" style="font-size: 59px;">Creative Ideas, <br>
                            What we are Adorning</h1>

                        <p class="tony-p-gray-style pb-4">We are a specialist agency in manufacturing design for <br> personal and corporate brands</p>

                        <module type="btn" button_style="btn-dark" button_size="btn-md px-5 py-4 mt-5" text="Get Started"/>


                    </div>
                </div>

                <div class="col-12 col-xl-7">
                    <div class="background-image-holder mh-600 d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/tony/home-content-bg-1.png'); background-size: contain;" >
                        <div class="col-lg-6 col-md-8 col-12 mx-auto home-1-content-right mt-md-0 mt-10">
                            <div class="col-md-12 d-md-flex justify-content-center">
                                <div class="col-md-5 col-12">
                                    <div class="tony-template-content-1-boxes d-flex flex-column justify-content-center align-items-center">
                                        <img height="35" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-inner-1.png" class=""/>
                                        <p class="mt-2 mb-0" style="font-size: 14px;">UX Design</p>
                                    </div>

                                    <div class="tony-template-content-1-boxes d-flex flex-column justify-content-center align-items-center">
                                        <img height="35" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-inner-3.png" class=""/>
                                        <p class="mt-2 mb-0" style="font-size: 14px;">Custom Cloud</p>
                                    </div>

                                </div>
                                <div class="col-md-5 col-12">


                                    <div class="tony-template-content-1-boxes d-flex flex-column justify-content-center align-items-center">
                                        <img height="35" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-inner-2.png" class=""/>
                                        <p class="mt-2 mb-0" style="font-size: 14px;">UI Design</p>
                                    </div>
                                    <div class=" tony-template-content-1-boxes d-flex flex-column justify-content-center align-items-center">
                                        <img height="35" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-inner-4.png" class=""/>
                                        <p class="mt-2 mb-0" style="font-size: 14px;">Brounding</p>
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
