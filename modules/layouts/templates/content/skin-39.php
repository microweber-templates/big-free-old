<?php

/*

type: layout

name: Content 39

position: 39

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
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-content-skin-39-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <i class="mw-micon-Atom icon-size-62px safe-element"></i>
                <br><br><br>
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Pictures In The Sky</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">What if you “think” you don’t know enough about your topic? Then, do some research. Read books and magazines. Do some searches on the Internet. Who knows? You might find an area, a niche, that is just waiting for you to fill it with useful information.</p>
                <br><br>
                <module type="btn" text="Explore" button_style="btn-primary"/>



            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
