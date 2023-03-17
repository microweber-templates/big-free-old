<?php

/*

type: layout

name: Skin-20

description: Skin-20

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick();
    });
</script>

<style>
    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-track {
        display: flex !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-dots {
        position: relative;
        bottom: -30px;
    }

    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .avatar-holder {
            margin-left: -40% !important;
        }
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-slide {
        height: inherit !important;
    }


    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-prev {
            bottom: -104px;
            top: unset;
            left: 72px !important;
        }



    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-next {
            bottom: -104px;
            top: unset;
            left: 70px;
            color: #FFA028!important;
        }

    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrows-1 .slick-arrow {
            background-color: #ffffff!important;
            border: 1px solid rgba(255, 160, 40, 0.8)!important;

        }



    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrows-1 .slick-arrow:hover {
            background: #FF5670!important;

            border-color: #FF5670!important;
        }




    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-arrows-1 .slick-arrow:before {
        color: rgba(255, 160, 40, 0.8)!important;
        margin-bottom: 2px!important;
        opacity: 1;

    }

    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrows-1 .slick-arrow:hover .slick-arrow:before {
            color: #ffffff !important;
            opacity: 1 !important;
        }

        .action-blog-quote {
        right: -13px;
        top: 211px;

</style>

<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": false, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="row">
                <div class=" d-flex justify-content-between flex-wrap mx-auto">
                   <div class="col-lg-6 col-11 pe-3 position-relative">
                       <?php if ($item['client_picture']): ?>
                           <div class="img-as-background h-500">
                               <img src="<?php print thumbnail($item['client_picture'], 800); ?>" class="position-relative"/>

                           </div>
                           <img src="<?php print template_url(); ?>assets/img/layouts/action/action-blog-quote.png" class="position-absolute action-blog-quote"/>

                       <?php endif; ?>
                   </div>

                    <div class="col-lg-4 col-12 mx-auto ps-3 mt-lg-0 mt-5">
                        <img src="<?php print template_url(); ?>assets/img/layouts/action/action-blog-quote-blue.png" class="mb-4"/>


                        <h4>Save Time Managing <br> Social Media For Business</h4>

                        <p class="py-3" style="line-height: 36px; color: #8C93A4;"><?php print character_limiter($item['content'], $limit); ?></p>

                        <img src="<?php print template_url(); ?>assets/img/layouts/action/action-blog-stars.png" class="mb-4"/>



                        <h6><?php print $item['name']; ?></h6>
                        <small style="color: #8C93A4;"><?php print $item['client_role']; ?></small>


                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
