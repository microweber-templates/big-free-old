<?php

/*

type: layout

name: Content 57

position: 57

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


<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop d-flex justify-content-center align-items-center edit nodrop" field="layout-content-skin-57-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-lg-12 col-lg-12 mx-auto">
                <div class="row">
                    <div class="col-md-4 mb-6 allow-drop cloneable">
                        <h6>The Amazing Hubble</h6>
                        <p>Rack mount LCD monitors can save you a lot of space and help you form a convenient and efficient desktop for your work or home study. </p>
                        <p>Rack mount LCD monitors can save you a lot of space and help you form a convenient and</p>
                    </div>

                    <div class="col-md-4 mb-6 allow-drop cloneable">
                        <h6>Asteroids</h6>
                        <p>Rack mount LCD monitors can save you a lot of space and help you form a convenient and efficient desktop for your work or home study. </p>
                    </div>

                    <div class="col-md-4 mb-6 allow-drop cloneable">
                        <h6>Moon Gazing</h6>
                        <p>Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones you’re most comfortable with. It has an iPhone-compatible jack</p>
                        <p>Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
