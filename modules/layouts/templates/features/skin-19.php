<?php

/*

type: layout

name: Feature 19

position: 19

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


<section class="section <?php print $layout_classes; ?> edit   nodrop" field="layout-feature-skin-19-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element allow-drop container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h2 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h2>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">I can change any and everything in my life by simply changing myself. This puts me in
                    the driving seat of my life and makes</p>

            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable element element background-color-element safe-mode">
                <i class="safe-element mw-micon-Alien-2" style="font-size: 72px;"></i>

                <div class="text-center mt-6 allow-drop safe-mode">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">A subscriber recently wrote to me: A friend of mine is on a fixed income and has maxed out his
                        credit cards (nearing $10,000). <br> He has started a new business, but currently has no customers or
                        prospects. He is affirming that.</p>
                    <br>
                    <module type="btn" button_style="btn-primary" text="Explore"/>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable element element background-color-element safe-mode">
                <i class="safe-element mw-micon-Alien" style="font-size: 72px;"></i>

                <div class="text-center mt-6 allow-drop safe-mode">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business
                        convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then,
                        she likes it and this supports us too.</p>
                    <br>
                    <module type="btn" button_style="btn-primary" text="Explore"/>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable element element background-color-element safe-mode">
                <i class="safe-element mw-micon-Angel-Smiley" style="font-size: 72px;"></i>

                <div class="text-center mt-6 allow-drop safe-mode">
                    <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Features Title</h4>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business
                        convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then,
                        she likes it and this supports us too.</p>
                    <br>
                    <module type="btn" button_style="btn-primary" text="Explore"/>
                </div>
            </div>
        </div>

    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
