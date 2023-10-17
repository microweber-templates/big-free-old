<?php
/*

type: layout

name: Content 69

position: 69

categories: Content

*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section   <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-skin-content-69-<?php print $params['id'] ?>" rel="module">
        <div class="row cloneable element background-color-element safe-mode px-0">
            <div class="col-12 col-lg-6 cloneable element">
                <img class="w-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-7.jpg"/>
            </div>
            <div class="col-12 col-lg-6 px-6 px-xl-8 py-md-2 py-5 align-self-center allow-drop cloneable element">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3">In The Desert</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Two trees are brought to you, but on the top - a toothy goal, windy. With you in joy, with sore wounds, we go through life fearfully. Why weren't we in the Garden of Eden? Or in a park among flower beds? </p>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">So we will freeze completely, until Amina, in this unfortunate, ridiculous fate. And we are proud of our letters. We are a shady roof in the summer for everyone. From our hands - branches - radiant, we will bear fruit for ever. We are proud, eloquent, united. Sharp tooth - life is harsh.  Two old-fashioned trees. </p>
            </div>
        </div>
        <div class="row cloneable element background-color-element safe-mode px-0">
            <div class="col-12 col-lg-6 px-6 px-xl-8 py-md-2 py-5 align-self-center order-2 order-lg-1 allow-drop cloneable element">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3">Beautiful Nature</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Two trees are brought to you, but on the top - a toothy goal, windy. With you in joy, with sore wounds, we go through life fearfully. Why weren't we in the Garden of Eden? Or in a park among flower beds? So we will freeze completely, until Amina, in this unfortunate, ridiculous fate. And we are proud of our letters. </p>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">We are a shady roof in the summer for everyone. From our hands - branches - radiant, we will bear fruit for ever. We are proud, eloquent, united. Sharp tooth - life is harsh. Two old-fashioned trees.</p>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2 cloneable element">
                <img class="w-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg"/>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>

















