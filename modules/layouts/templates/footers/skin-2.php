<?php

/*

type: layout

name: Footers 2

position: 2

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
         field="layout-footer-skin-2-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
<!-- Footer -->
<div class="mw-layout-container no-element allow-drop container text-md-start text-center ">
   <div class="row d-flex justify-content-center">
       <div class="col-md-4 col">
           <div class="pb-5">
               <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
           </div>
           <p><?php _e("Have you ever finally just gave in to the temptation and read your."); ?></p>
       </div>
       <div class="col-md-8 row d-lg-flex justify-content-end">
           <div class="col-md-3 col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?> </p>
               <module type="menu" template="simple" name="footer_menu"/>
           </div>

           <div class="col-md-3 col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
               <module type="menu" template="simple" name="footer_menu"/>
           </div>

           <div class="col-md-3 col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
               <module type="menu" template="simple" name="footer_menu"/>
           </div>

       </div>
        <div class="col-md-12 d-md-flex justify-content-lg-center align-items-lg-center px-md-0 mt-lg-7">
            <div class="col-md-5 col">
                <module type="menu" class="d-flex mb-0" template="simple" name="footer_menu"/>
            </div>
            <div class="col-md-4 col allow-drop">

            </div>

            <div class="col-md-3 col text-md-end">
                <module type="social_links"/>
            </div>
        </div>
   </div>
</div>

</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="mw-layout-container no-element allow-drop container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-2-<?php print $params['id'] ?>" rel="module">
© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>

