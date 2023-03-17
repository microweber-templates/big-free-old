<?php

/*

type: layout

name: Call to action 26

position: 26

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-26-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid" >
        <div class="col-xl-10 justify-content-center mx-auto" style="background-color: #FFA028; padding: 120px;">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-lg-8 allow-drop text-center text-lg-start mx-auto">
                    <h3 style="color: #ffffff;">Get Free Marketing Analysis </h3>
                    <p style="color: #ffffff;">Amet minim mallit non desnit Lorem Ipsum ast sit aliqua dolor do amet sit velit lorem ipsum velit</p>
                </div>

                <div class="col-12 col-lg-4 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                    <module type="btn" button_style="btn btn-primary" button_text="Contact" />
                </div>
            </div>
        </div>
    </div>
</section>
