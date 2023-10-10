<?php

/*

type: layout

name: Feature 39

position: 39

categories: Features

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

<section class="section  <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-39-<?php print $params['id'] ?>" rel="module" ">
    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node" style="background-color: #f5f5f5; padding-top: 1px;>

        </div>
        <div class="mw-layout-background-overlay">

        </div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
            <div class="row m-1 text-center text-sm-center">
                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable element safe-mode">
                    <div class="allow-drop p-5 element background-color-element" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3" style="font-weight: bold;">Basic</h6>
                        <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3"><span style="font-size: 24px;">€</span>30<span style="font-size: 24px;">/m²</span></h3>
                        <br>
                        <br>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Unlimited planning solutions 3D</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">visualization of all rooms</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Working documentation Work</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">with suppliers and contractors</p>
                        <br>
                        <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                    </div>

                </div>

                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable element safe-mode">
                    <div class="allow-drop p-5 element background-color-element" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3" style="font-weight: bold;">Standard</h6>
                        <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3"><span style="font-size: 24px;">€</span>50<span style="font-size: 24px;">/m²</span></h3>

                        <br>
                        <br>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Unlimited planning solutions 3D</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">visualization of all rooms</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Working documentation Work</p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">with suppliers and contractors</p>
                        <br>
                        <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                    </div>

                </div>

                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable element safe-mode">
                    <div class="allow-drop p-5 element background-color-element" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3" style="font-weight: bold;">Premium</h6>
                        <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3"><span style="font-size: 24px;">€</span>70<span style="font-size: 24px;">/m²</span></h3>

                        <br>
                        <br>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Unlimited planning solutions 3D </p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">visualization of all rooms </p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">Working documentation Work </p>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-4">with suppliers and contractors</p>
                        <br>
                        <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
                    </div>

                </div>
            </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
