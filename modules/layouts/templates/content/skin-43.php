<?php

/*

type: layout

name: Content 43

position: 43

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


<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop d-flex justify-content-center align-items-center edit nodrop no-typing" field="layout-content-skin-43-<?php print $params['id'] ?>" rel="module">
        <div class="text-center">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Awesome Title</h3>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Are you considering buying a compatible inkjet cartridge for your printer?
                        <br> There are many reputed companies like Canon, Epson, Dell, and Lexmark.</p>
                    <br />
                    <br />
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg"/>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
