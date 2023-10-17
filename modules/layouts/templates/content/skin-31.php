<?php

/*

type: layout

name: Content 31

position: 31

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
    <div class="container mw-layout-container no-element allow-drop edit no-typing" field="layout-content-skin-31-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop safe-mode">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3">Your Awesome Title Here</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Audio player software is used to play back sound recordings in one of the many formats available for computers today</p>
                <br/>
                <module type="btn" button_style="btn-primary" text="Learn More"/>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
