<?php

/*

type: layout

name: Footers 10

position: 10

categories: Footers

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

<section class="  footer-background <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-10-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
       <div class="text-center">
           <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
       </div>
    </div>

</section>
