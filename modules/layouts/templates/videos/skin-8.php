<?php

/*

type: layout

name: Video 8

position: 8

categories: Video

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

<style>
    .ziza-rectangle-26 {
        position: absolute;
        top: 0;
        left: -30px;
        z-index: 0;
        background-color: #EFF1FF;
        height: 178px;
        width: 178px;
        border-bottom-right-radius: 100px;
    }

    .ziza-eclipse-86 {
        position: absolute;
        bottom: 13px;
        right: -38px;
        z-index: 0;

        background-color: #FFF5DB;
        height: 129px;
        width: 129px;
        border-radius: 100px;
    }

    iframe {
        border-radius: 30px;
    }
</style>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center nodrop">

            <div class="col-lg-5 mx-auto allow-drop cloneable position-relative">
            <div class="ziza-eclipse-86"></div>
                <module type="video" template="default" url="https://www.youtube.com/watch?v=EKiaLcZkReM&t=3s&ab_channel=MicroweberWebsiteBuilder%26CMS" height="500">
            </div>

            <div class="col-lg-5 text-left pt-4 mx-auto allow-drop element cloneable position-relative">
                <div class="ziza-rectangle-26"></div>

                <div class="allow-drop position-relative" style="z-index: 2;">
                    <h2 class="mb-4">Great Digital Product <br> Agency since 2016 </h2>
                    <p class="mt-1" style="color: #565656; font-size: 18px;">Our Business Plan is a written document describing a company's core business activites,
                        Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality
                        Product with modern idea accordingly their budgets and according thir reuirements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
