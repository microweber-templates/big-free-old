<?php

/*

type: layout

name: Call to action 15

position: 15

hidden: true


categories: Call to Action

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

<section class="section form-control-outline-dark<?php print $layout_classes; ?> ">


       <module type="background" id="background-layout--<?php print $params['id'] ?>" />


 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container edit nodrop no-typing" field="layout-call-to-action-skin-15-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex align-items-center justify-content-center justify-content-lg-end text-center text-lg-start">
            <div class="col-12 col-sm-10 col-lg-4 allow-drop py-4 safe-mode">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="m-0">Sign up to newsletter</h1>
            </div>

            <div class="col-12 col-sm-10 col-lg-8 allow-drop py-4">
                <module type="contact_form" template="subscribe-6"/>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
