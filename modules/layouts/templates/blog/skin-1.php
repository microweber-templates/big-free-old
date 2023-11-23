<?php

/*

type: layout

name: Blog 1

position: 1

categories: Blog

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


<section class="section <?php print $layout_classes; ?>">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element   edit  " field="layout-blog-skin-1-<?php print $params['id'] ?>" rel="module">
        <module type="posts" template="skin-1" slides-md="2" slides-lg="3" slides-lg="3" adaptive_height="true" />
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
