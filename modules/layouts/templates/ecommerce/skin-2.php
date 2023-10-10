<?php

/*

type: layout

name: Ecommerce 2

position: 2

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


<section class="section <?php print $layout_classes; ?> edit  nodrop" field="layout-ecommerce-skin-2-<?php print $params['id'] ?>"  rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <module type="shop/products" template="skin-1" />
    </div>
  <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
