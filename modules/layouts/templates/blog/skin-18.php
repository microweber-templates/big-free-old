<?php

/*

type: layout

name: Blog 18

position: 18

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
      <div class="row col-xl-10 mx-auto">
          <h2 class="mb-3">Our Latest Blog</h2>

          <module type="posts" template="skin-18"/>
      </div>
    </div>
</section>
