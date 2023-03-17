<?php

/*

type: layout

name: Blog 15

position: 15

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-15-<?php print $params['id'] ?>" rel="module" style="background-color: #002632;">
    <div class="container-fluid">
       <div class="col-10 mx-auto">

           <div class="mx-auto text-center mb-5 d-lg-flex justify-content-between">
               <h1 class="mb-3" style="color: #ffffff; font-size: 64px;">My Project</h1>
               <div>
                   <p class="lead" style="color: #ffffff; ">Grab the opportunity to captiure memories that you will treasure for
                       <br> a safetime. Why be ordinary when you can extraordinary?</p>

                   <div class="nodrop d-flex align-items-center justify-content-end cloneable ">
                       <module type="btn" button_text="See All Moments ->" button_style="btn btn-link px-5 py-4 text-decoration-underline"/>
                   </div>
               </div>
           </div>

           <module type="posts" template="skin-15"/>


       </div>
    </div>
</section>
