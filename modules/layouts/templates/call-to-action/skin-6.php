<?php

/*

type: layout

name: Call to action 6

position: 6

categories: Call to Action

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

<section class="section <?php print $layout_classes; ?> edit nodrop" field="layout-call-to-action-skin-6-<?php print $params['id'] ?>" rel="module">


    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node"></div>
        <div class="mw-layout-background-overlay"></div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 mx-auto col-lg-6 d-flex align-items-center">
                <div class="allow-drop text-center text-lg-start w-100">
                    <img src="<?php print template_url(); ?>assets/img/layouts/cta-6.png">
                </div>
            </div>

            <div class="col-12 col-sm-10 mx-auto col-lg-6 d-flex align-items-center">
                <div class="allow-drop text-center text-lg-start">
                    <h3 class="mb-5">Promotional Advertising Specialty You Waited Enough</h3>
                    <module type="btn" button_style="btn-primary   px-5" text="Get It Now"/>
                </div>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
