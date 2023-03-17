<?php

/*

type: layout

name: Testimonial 25

position: 25

categories: Testimonials

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-25-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row col-12 col-xl-10 mx-auto allow-drop">
            <h2 class=" mb-5">Don’t Believe <br> Me Check Client Says</h2>



            <div class="allow-drop"></div>

            <module type="testimonials" template="skin-20" project_name="Testimonials 3"/>

        </div>
    </div>
</section>
