<?php

/*

type: layout

name: Content 28

position: 28

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
    <div class="container mw-layout-container no-element allow-drop edit no-typing" field="layout-content-skin-28-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto pb-5 text-center d-flex align-items-center safe-mode">
                <div class="allow-drop">
                    <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4 font-weight-normal">Your Title Here</h5>
                    <h3 data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-5">The Awesome Mountain</h3>
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-12.jpg"/>

                    <br/>
                    <br/>
                    <br/>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Remember, your story is a dynamic tool that can evolve and adapt as your venture progresses. The way you tell your story online can indeed make a significant difference in building connections, generating interest, and achieving your goals.</p>

                    <module type="btn" text="Learn More" button_style="btn-primary" button_size=""/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
