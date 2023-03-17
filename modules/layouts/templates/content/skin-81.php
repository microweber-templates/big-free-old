<?php

/*

type: layout

name: Content 81

position: 81

categories: Content

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


<section class="section <?php print $layout_classes; ?> section-content-80 pb-0 edit safe-mode nodrop" field="layout-content-skin-81-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-5 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center">
                <div class="row">
                    <div class="allow-drop mb-3">
                        <div class="d-inline nodrop">
                            <h1>Regiater To Listen To You <br> Favorite Podcast.</h1>
                            <br>
                        </div>

                        <p class="py-4" style="color: #58585D;">Sed Ut Perspiciatis unde omnis iste natus error sit voluptatem
                            <br> we denounce with righteous indignation and dislike men who <br> are so beguiled and demoralized
                        </p>

                    </div>

                    <div class="col-12 d-flex flex-wrap mx-auto justify-content-center mt-5">
                        <div class="col-md-4 col-12  mx-xl-0 mx-3" >
                            <h3 style="color: #181E4E; font-weight: bold; font-size: 40px;">2K+</h3>

                            <p style="color: #181E4E; font-weight: 600;">Podcasts</p>
                        </div>
                        <div class="col-md-4 col-12  mx-xl-0 mx-3">

                                <h3 style="color: #181E4E; font-weight: bold; font-size: 40px;">10K+</h3>

                            <p style="color: #181E4E; font-weight: 600;">Actice Users</p>
                        </div>

                        <div class="col-md-4 col-12  mx-xl-0 mx-3">

                            <h3 style="color: #181E4E; font-weight: bold; font-size: 40px;">190K+</h3>

                            <p style="color: #181E4E; font-weight: 600;">Podcasters</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 col-lg-6 mx-auto">
                <div class="text-center text-lg-center pb-5 allow-drop">


                    <div class="img-as-background h-650 w-100">
                        <img src="<?php print template_url(); ?>assets/img/layouts/merry/merry-content-81.png"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
