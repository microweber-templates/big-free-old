<?php

/*

type: layout

name: Content 54

position: 54

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
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-content-skin-54-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-6 mx-auto text-center allow-drop">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Title Here</h3>
                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">Ah, the technical interview. Nothing like it. Not only does it cause anxiety,
                    <br> but it causes anxiety for several different reasons.</p>
                <br/>

                <div class="d-flex align-items-center justify-content-center nodrop">
                    <div class="cloneable element mx-2">
                        <module type="btn" button_style="btn-primary"  text="Buy"/>
                    </div>
                    <div class="cloneable element mx-2">
                        <module type="btn" button_style="btn-link" text="Learn More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
