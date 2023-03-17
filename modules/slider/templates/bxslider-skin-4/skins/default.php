<?php if (isset($slide['primaryText'])) {
    $primaryText = $slide['primaryText'];

}
if (isset($slide['url'])) {
    $url = $slide['url'];
} else {
    $url = 'javascript:;';
}
$img = template_url() . 'assets/img/layouts/gallery-9.jpg';
if (isset($slide['images'][0])) {
    $img = thumbnail($slide['images'][0], 1920, 1920);
}
?>

<div class=" py-0 mw-layout-overlay-wrapper" data-background-position="center center" data-overlay="1" data-overlay-black="true">
    <div class="mw-layout-overlay"></div>

    <div class="mh-100vh d-flex align-items-center background-image-holder" style="background-image: url(<?php print $img ; ?>);">
        <div class="container px-0 mw-layout-overlay-container">
            <div class="row text-center text-white">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <?php if (isset($slide['primaryText'])) { ?>
                        <h1 style="color: #ffffff;"><?php echo $primaryText; ?></h1>
                    <?php } ?>
                    <br>
                    <?php if (isset($slide['secondaryText'])) { ?>
                        <p class="lead mb-4" style="color: #ffffff;"><?php print $slide['secondaryText']; ?></p>
                    <?php } ?>
                    <br>
                    <?php if ($slide['seemoreText']): ?>
                        <a class="btn btn-primary px-5 py-4" href="<?php if (isset($slide['url'])): ?><?php print $slide['url']; ?><?php endif; ?>"><?php print $slide['seemoreText'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
