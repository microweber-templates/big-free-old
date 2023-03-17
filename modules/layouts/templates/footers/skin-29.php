<?php

/*

type: layout

name: Footers 29

position: 29

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

<section class="  footer-skin-29 footer-background position-relative pt-10 <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-29-<?php print $params['id'] ?>" rel="module" style="background-color: #191046!important;">
<!-- Footer -->

    <div class="col-xl-6 absolute-container position-xl-absolute p-8">

            <h1 class="text-center">Move even faster with Your <br> guide in the digital age.</h1>

            <div class="d-flex justify-content-center pt-5">
                <module type="btn" text="Let`s Talk" button_style="content-73-btn me-3" button_size=""/>
                <module type="btn" text="Book Your Consultation" button_style="content-73-btn-2" button_size=""/>

            </div>

    </div>

    <div class="container-fluid pt-10 text-md-start text-center">
       <div class="row d-flex justify-content-center">

           <div class=" col-md-3 pr-md-8">
               <h6 class="mb-4">COMPANY INFO</h6>
               <p>Reach out to us anytime and lets create a better future for all technology users together, forever.
                   We are open to all types of collab offers and tons more.
               </p>

               <div class="d-flex align-items-center my-3">
                   <i class="mdi mdi-checkbox-marked-circle-outline me-4 d-block safe-element " style="color: #ffffff; font-size: 25px;"></i>

                  <div>
                      <p class="mb-0 footer-gray-text">Office Hours</p>
                      <p class="mb-0 footer-gray-text">Monady-Friday 9 AM-5 PM PST</p>
                  </div>
               </div>

               <div class="d-flex align-items-center my-3">
                   <i class="mdi mdi-checkbox-marked-circle-outline me-4 d-block safe-element " style="color: #ffffff; font-size: 25px;"></i>

                   <div>
                       <p class="mb-0 footer-gray-text">Support Hours</p>
                       <p class="mb-0 footer-gray-text">24/7 365</p>
                   </div>
               </div>
           </div>

           <div class="col-md-3 col-sm-12 col-xs-12">
                   <h6 class="mb-4">CONTACT INFO</h6>

                   <div class="d-flex align-items-center my-3">
                      <i class="mdi mdi-checkbox-marked-circle-outline me-4 d-block safe-element " style="color: #ffffff;  font-size: 25px;" ></i>

                      <a href="mailto:info@techyessolutions.com">info@techyessolutions.com</a>
                  </div>

                   <div class="d-flex align-items-center my-3">
                       <i class="mdi mdi-checkbox-marked-circle-outline me-4 d-block safe-element "style="color: #ffffff;  font-size: 25px;"  ></i>
                       <p>858-227-4878</p>
                   </div>

           </div>

           <div class="row col-md-3 col d-lg-flex mt-md-0 mt-5">
               <h6 class="mb-4">OUR SERVICES</h6>
               <p class="footer-gray-text">Information Systems Strategy</p>
               <p class="footer-gray-text">Custom Software</p>
               <p class="footer-gray-text">Integration Services</p>
               <p class="footer-gray-text">Business Automation</p>
               <p class="footer-gray-text">Web, Ecommerce & Mobiel Apps</p>
               <p class="footer-gray-text">Creative</p>

           </div>

           <div class="row col-md-3 col d-lg-flex mt-md-0 mt-5">
               <h6 class="mb-4">OUR LOCATIONS</h6>
               <img src="<?php print template_url(); ?>assets/img/layouts/Techyes-map-01-3.png" class="content-73-image"/>
           </div>
       </div>
    </div>


</section>

<section class="py-2" style="background-color: #191046;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" style="color: #ffffff;" field="footer-reserved-skin-13-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center" style="color: #ffffff;"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
