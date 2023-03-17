<?php

/*

type: layout

name: Blog 14

position: 14

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
       <div class="col-10 mx-auto">

           <div class="mx-auto text-center mb-8">
               <h1 class="mb-3" style="font-size: 64px;">Beautiful Moments That i Captured</h1>
               <p style="color: #8F8BA5;" class="lead">I photograph beautiful things everywhere, born of boredom. Raised by longing, for those of
                   <br> you who love presentations that make you dizzy and keep your spirits up.</p>
           </div>

           <module type="posts" template="skin-14"/>

           <div class="nodrop d-flex align-items-center justify-content-center cloneable ">
               <module type="btn" button_text="See All Moments ->" button_style="btn btn-primary px-5 py-4"/>
           </div>
       </div>
    </div>
</section>
