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

<section class="  footer-background py-0 <?php print $layout_classes; ?> edit nodrop "
         field="layout-footer-skin-10-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <!-- Footer -->
    <div class="mw-layout-container no-element allow-drop container">
       <div class="text-center">
           <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
       </div>
    </div>

<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
