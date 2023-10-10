<?php

/*

type: layout

name: Video 1

position: 1

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-1-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 mx-auto allow-drop">
                <h1 style="font-size: 72px;">Share your story <br> with a video</h1>

                <p>
                    Authenticity is key. <br> Share your journey, your passion, and the real reason behind your venture. <br>
                    People connect with genuine stories.
                </p>
                <module class="module-padding-for-handle" type="video" template="default" url="https://www.youtube.com/watch?v=o_kgdCGisso&ab_channel=WildWanderlust" height="500">
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
