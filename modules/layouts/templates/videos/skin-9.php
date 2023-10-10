<?php

/*

type: layout

name: Video 9

position: 9

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


<section class="section video-skin-9 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-9-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container-fluid">
        <div class="row justify-content-center align-items-center text-center nodrop">

            <div class="col-lg-5 mx-auto allow-drop position-relative">

                <module type="video" template="default" url="https://www.youtube.com/watch?v=o_kgdCGisso&ab_channel=WildWanderlust" height="500">
            </div>

            <div class="col-lg-5 text-left pt-4 mx-auto allow-drop position-relative">

                <div class="allow-drop position-relative" style="z-index: 2;">
                    <h2 class="mb-4">Share your story with a video</h2>
                    <p class="mt-1" style="color: #565656; font-size: 18px;">
                        Authenticity is key. Share your journey, your passion, and the real reason behind your venture. People connect with genuine stories
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center text-center nodrop">

            <div class="col-lg-5 text-left pt-4 mx-auto allow-drop position-relative">

                <div class="allow-drop position-relative" style="z-index: 2;">
                    <h2 class="mb-4">Share your story with a video </h2>
                    <p class="mt-1" style="color: #565656; font-size: 18px;">
                        Authenticity is key. Share your journey, your passion, and the real reason behind your venture. People connect with genuine stories
                    </p>
                </div>
            </div>

            <div class="col-lg-5 mx-auto allow-drop position-relative">

                <module type="video" template="default" url="https://www.youtube.com/watch?v=o_kgdCGisso&ab_channel=WildWanderlust" height="500">
            </div>


        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
