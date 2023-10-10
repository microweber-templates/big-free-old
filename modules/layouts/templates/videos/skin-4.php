<?php

/*

type: layout

name: Video 4

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-4-<?php print $params['id'] ?>" rel="module">

    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node" style="background-color: #ddd;">

        </div>
        <div class="mw-layout-background-overlay">

        </div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
        <div class="mw-layout-container d-flex align-items-center justify-content-center no-element allow-drop container" style="min-height: 80vh;">
            <div class="row text-center nodrop">
                <div class="col-12 col-md-10 mx-auto allow-drop">
                    <h1>Share story with a video.</h1>
                    <p>Authenticity is key. Share your journey, your passion, and the real reason behind your venture. People connect with genuine stories.</p>

                    <module type="video" template="dialog">
                </div>
            </div>
        </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
