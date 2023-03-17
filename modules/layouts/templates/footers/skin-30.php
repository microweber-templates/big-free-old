<?php

/*

type: layout

name: Footers 30

position: 30

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

<section class="  footer-skin-30 footer-background position-relative py-0 <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-30-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->

    <div class="container-fluid pt-10 text-md-start text-center">

        <hr class="mb-9" style="color: #E4E4E4;">
        <div class="row col-xl-10 d-flex mx-auto justify-content-center">

            <div class="col-xl-3 col-12 pr-md-8">
                <module type="logo" id="footer-logo-<?php print $params['id']; ?>"/>

                <p class="py-3">
                    Leading digital agency with solid design and development expertise. We build readymade websites,
                    mobile applications, and elaborate online business services.
                </p>

                <div>
                    <module type="social_links"/>
                </div>
            </div>

            <div class="col-xl-9 d-flex flex-wrap justify-content-lg-end justify-content-center">


                <div class="d-flex flex-column col-xl-3 col-md-4 col-12 mt-md-0 mt-5">
                    <h6 class="mb-4">Company</h6>
                    <a class="py-2">About Us</a>
                    <a class="py-2">Career</a>
                    <a class="py-2">Team</a>
                    <a class="py-2">Become Investor</a>
                </div>

                <div class="d-flex flex-column col-xl-3 col-md-4 col-12 mt-md-0 mt-5">
                    <h6 class="mb-4">Support</h6>
                    <a class="py-2">FAQ</a>
                    <a class="py-2">Policy</a>
                    <a class="py-2">Business</a>
                    <a class="py-2">Services</a>

                </div>

                <div class="d-flex flex-column col-xl-3 col-md-4 col-12 mt-md-0 mt-5">
                    <h6 class="mb-4">Contact</h6>
                    <a class="py-2">WhatsApp</a>
                    <a class="py-2">Support 24</a>
                    <a class="py-2">Call Us</a>
                    <a class="py-2">Questions</a>
                </div>
            </div>
        </div>

        <hr class="mt-9" style="color: #E4E4E4;">
    </div>


</section>
<br>
<section class="py-2">
    <div class="container-fluid px-md-10 py-2 mb-4" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-lg-6 text-md-start text-center edit" field="footer-reserved-skin-13-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-lg-6 mb-0 noedit text-md-end text-center" ><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
