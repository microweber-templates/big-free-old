<?php

/*

type: layout

name: Ecommerce 12

position: 12

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-ecommerce-skin-12-<?php print $params['id'] ?>" rel="module" style="background-color: #FCF3EC;">
    <div class="container-fluid">

       <div class="row">
           <div class="col-xl-10 justify-content-center align-items-center text-center mx-auto">
               <h2 class="mb-3">We Provide Many Types Of Course</h2>
               <p class="lead mb-5">Price pattern glossy waistine ensemnle trend pumps petticoat sewing pretportrt <br> value young availability original hondbong influence</p>


               <module type="tabs" template="flower-tabs"/>
           </div>
       </div>
    </div>
</section>
