<?php

/*

type: layout

name: Call to action 10

position: 10

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

<section class="section <?php print $layout_classes; ?> ">


       <module type="background" id="background-layout--<?php print $params['id'] ?>" />


 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container edit nodrop no-typing" field="layout-call-to-action-skin-10-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-5 allow-drop text-center text-lg-start">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Start your free trial now, with a simple registration.</h3>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto safe-mod">
                <module type="btn" button_style="btn-primary   px-5" text="Button" class="ms-2"/>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
