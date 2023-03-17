<?php

/*

type: layout

name: Ecommerce 10

position: 10

categories: Ecommerce

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-ecommerce-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="shop/products" template="skin-11" />
    </div>
</section>
