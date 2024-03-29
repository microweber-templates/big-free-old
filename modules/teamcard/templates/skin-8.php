<?php
/*

type: layout

name: Skin-8

description: Skin-8

*/
?>

<script>
    $(document).ready(function ()
        { $(".mw-big-team-bio").each(function(i){
            var len=$(this).text().trim().length;
            if(len>100)
            {
                $(this).text($(this).text().substr(0,120)+'...');
            }
        });
    });
</script>

<?php if (isset($data) and $data): ?>

    <div class="row text-center text-sm-center d-flex justify-content-center justify-content-lg-center">
        <?php foreach ($data as $key => $slide): ?>

            <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                <div class="d-block">
                    <?php if ($slide['file']) { ?>
                        <div class="img-as-background square mb-3">
                            <img src="<?php print thumbnail($slide['file'], 800); ?>"/>
                        </div>
                    <?php } else { ?>
                        <div class="img-as-background square mb-3">
                            <img src="<?php print template_url() ?>modules/teamcard/templates/default-image.svg"/>
                        </div>
                    <?php } ?>

                    <h5><?php print array_get($slide, 'name'); ?></h5>
                    <p><?php print array_get($slide, 'role'); ?></p>
                    <p class="mw-big-team-bio"><?php print array_get($slide, 'bio'); ?></p>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

<?php endif; ?>
