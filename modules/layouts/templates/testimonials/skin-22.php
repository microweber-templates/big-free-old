<?php

/*

type: layout

name: Testimonial 22

position: 22

categories: Testimonials

*/

?>



<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class=" <?php print $layout_classes; ?> section edit safe-mode  " field="layout-tony-testimonials-22-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">


        <div class="row justify-content-center">
            <div class="col-xl-10 ps-md-4 ms-md-1 py-5">
                <h2>Loved by businesses, and <br> individuals </h2>
            </div>

            <div class="col-xl-10 d-xl-flex flex-xl-wrap">
                <module type="testimonials" template="skin-16" style="max-width: 100%;" project_name="Testimonials 20"/>


            </div>

            <div class="col-xl-10 d-flex flex-wrap justify-content-center mx-auto py-5">

                <div class="col-xl-8 col-12 d-flex flex-wrap justify-content-center align-items-center">
                    <div class="col-xl-2 col-md-4 col-12 py-md-0 py-3 text-center"><img height="20" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-partners-1.png" class=""/></div>
                    <div class="col-xl-2 col-md-4 col-12 py-md-0 py-3 text-center"><img height="20" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-partners-2.png" class=""/></div>
                    <div class="col-xl-2 col-md-4 col-12 py-md-0 py-3 text-center"><img height="20" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-partners-3.png" class=""/></div>
                    <div class="col-xl-2 col-md-4 col-12 py-md-0 py-3 text-center"><img height="15" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-partners-4.png" class=""/></div>
                    <div class="col-xl-2 col-md-4 col-12 py-md-0 py-3 text-center"><img height="19" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/home-content-partners-5.png" class=""/></div>
                </div>
                <div class="col-xl-4 col-12 py-lg-0 pt-5 text-lg-start text-center">
                    <p>Give us a Call 1-888-498-9240 and we can <br> set you up, or <a style="color: #1A4AB9;" href="">check our pricing plans</a></p>
                </div>
            </div>
        </div>

    </div>
</section>

