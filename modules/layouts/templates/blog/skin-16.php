<?php

/*

type: layout

name: Blog 16

position: 16

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
       <div class="col-xl-10 mx-auto">
           <div class="mx-auto text-center mb-8">
               <h1 class="mb-3" style="font-size: 42px; color: #181E4E;">Our Latest Episodes</h1>

           </div>
           <module type="posts" template="skin-16"/>

           <div class="d-flex justify-content-center">
               <module type="btn" button_text="All Episodes"/>
           </div>
       </div>
    </div>
</section>
