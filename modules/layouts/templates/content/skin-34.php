<?php

/*

type: layout

name: Content 34

position: 34

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
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-content-skin-34-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop safe-mode">
                <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-7">Free Real Estate Listing</h5>

                <div class="nodrop d-flex justify-content-around">
                    <i class="icon-size-72px mb-7 safe-element cloneable element mw-micon-Home"></i>
                    <i class="icon-size-72px mb-7 safe-element cloneable element mw-micon-Building"></i>
                    <i class="icon-size-72px mb-7 safe-element cloneable element mw-micon-Compass-4"></i>
                </div>
                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">What if you “think” you don’t know enough about your topic? Then, do some research. Read books and magazines. Do some searches on the Internet. Who knows? You might find an area, a niche, that is just waiting for you to fill it with useful information.</p>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
