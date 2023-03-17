<?php

/*

type: layout

name: Skin-16

description: Skin-16

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick({
            rtl: document.documentElement.dir === 'rtl',
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 975,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>

<style>
    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-track {
        display: flex !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-slide {
        height: inherit !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .list-inline {
        margin: 0;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .list-inline li {
        margin: 0 3px;
    }

    @media screen and (min-width: 992px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-prev {
            left: -60px;
        }

    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-next {
            right: -60px;
        }
    }

    .tony-template-testimonial {
        border: 1px solid #DCE2E7;
        border-radius: 10px;
        transition: all 0.4s ease-in-out;

    }

    .tony-template-testimonial:hover {

        border-color: transparent;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transform: scale(1.05);


    }

    .testimonials-tony-p {
        color: #7E8495;
        font-size: 16px;
    }

    .slick-list {
        overflow: unset;
    }

</style>

<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "dots": false, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="tony-template-testimonial mx-3 p-5">

                <div class="py-3 mb-4">
                    <img height="20" width="auto" src="<?php print template_url(); ?>assets/img/layouts/tony/testimonials-stars.png" class=""/>
                </div>
                <p class="testimonials-tony-p mb-8"><?php print character_limiter($item['content'], $limit); ?></p>

                <div class="text-center text-sm-start mb-3">
                    <div class="d-block d-sm-flex align-items-center justify-content-between">
                        <div class="d-block d-sm-flex align-items-center">
                            <?php if ($item['client_picture']): ?>
                                <div class="me-3">
                                    <div class="w-40 mx-auto">
                                        <div class="img-as-background rounded-circle square">
                                            <img src="<?php print thumbnail($item['client_picture'], 120); ?>" class="d-block"/>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div>
                                <h6 class="mb-0"><?php print $item['name']; ?></h6>
                                <small class="mb-0 text-dark"><?php print $item['client_role']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

