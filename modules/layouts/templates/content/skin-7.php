<?php

/*

type: layout

name: Content 7

position: 7

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


<section class="section <?php print $layout_classes; ?> edit nodrop" field="layout-content-skin-7-<?php print $params['id'] ?>" rel="module">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop">
        <div class="row d-flex justify-content-center justify-content-md-between">
            <div class="col-12 col-sm-10 col-md-6 col-lg-5 mb-4 safe-mode allow-drop">
                 <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Like anything else, can go from the simple to the very complex.</h3>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-lg-6 mb-4 safe-mode allow-drop">
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts.</p>

                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope. So to get us off of first base, let’s define some of the key terms that pertain to telescopes to help you be able to talk to them more intelligently. </p>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
