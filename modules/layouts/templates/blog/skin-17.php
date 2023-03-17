<?php

/*

type: layout

name: Blog 17

position: 17

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
       <div class="col-xl-10 mx-auto">
           <div class="text-start mb-8">
               <h1 class="mb-3" style="font-size: 42px; color: #181E4E;">Top Podcast <br> For This Week</h1>
               <p style="color: #737272;" class="lead">Sed ut perspiciais unde omnish iste natus error <br> sit voluptatemaccusantium.</p>

           </div>
           <module type="posts" template="skin-17"/>
          <div class="d-flex justify-content-center">
              <module type="btn" button_text="Explore more"/>
          </div>
       </div>
    </div>
</section>
