<?php

/*

type: layout

name: Gallery 25

position: 25

categories: Gallery

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-25-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class=" col-10  mx-auto mb-5 cloneable px-0">
            <div class="mx-auto mb-5 d-lg-flex justify-content-between">
                <div class="col-lg-6">
                    <h1 class="mb-3" style="font-size: 64px;">My Best Captured</h1>
                </div>

                <div class="col-lg-4">
                    <p class="lead" style="color: #8F8BA5;">I wanted to tell a story on the street. And while often in magazines the act of walking is portrayed in a stereoteped and franky boring way, this is where looking too the future is for me, this is the future is for me.</p>
                </div>

            </div>

            <module type="pictures" template="skin-15"/>
        </div>
    </div>
</section>
