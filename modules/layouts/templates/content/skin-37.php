<?php

/*

type: layout

name: Content 37

position: 37

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
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-content-skin-37-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center mb-3 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-2">Your Title Here</h3>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row cloneable mb-3 py-md-3">
            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="h-100 d-flex flex-column border   px-5 py-5">
                    <div class="allow-drop text-center">
                        <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4">Las Vegas</h4>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-3">For business professionals caught between high OEM price and mediocre print and graphic output.</p>
                        <module type="btn" button_style="btn-primary" text="Learn more"/>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="h-100 d-flex flex-column border   px-5 py-5">
                    <div class="allow-drop text-center">
                        <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4">Computer Hardware</h4>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-3">Your business, and pay a lot less for an external IT professional to help you when you need it.</p>
                        <module type="btn" button_style="btn-primary" text="Learn more"/>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-6 cloneable element background-color-element safe-mode">
                <div class="h-100 d-flex flex-column border   px-5 py-5">
                    <div class="allow-drop text-center">
                        <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4">Choosing The Best</h4>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-3">According to the research firm Frost & Sullivan, the estimated size of the North American used test</p>
                        <module type="btn" button_style="btn-primary" text="Learn more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
