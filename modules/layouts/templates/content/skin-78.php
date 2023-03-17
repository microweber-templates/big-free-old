<?php

/*

type: layout

name: Content 78

position: 78

categories: Content

*/

?>

<style>


</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-78-<?php print $params['id'] ?>" rel="module" style="background-color: #002632;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-12 d-flex justify-content-center mx-auto">

                <div class="allow-drop text-center">
                    <h2 class="pb-7" style="color: #ffffff; font-size: 64px; line-height: 74px;">Capture Your Beautiful Photo With Me</h2>

                    <p class="lead tony-p-gray-style pb-5" style="color: #E2E2E2;">Photos are the most beautiful things that you will remember next time, so take your oppurtunity and brighten
                        <br> your future with photos so you don’t regret it later.</p>

                    <module type="btn" button_style="btn btn-primary" button_size="btn-md px-5 py-4" text="Start New Project"/>

                </div>


            </div>
        </div>
    </div>
</section>
