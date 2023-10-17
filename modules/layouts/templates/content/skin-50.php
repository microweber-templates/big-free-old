<?php

/*

type: layout

name: Content 50

position: 50

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
    <div class="container mw-layout-container no-element allow-drop edit nodrop no-typing" field="layout-content-skin-50-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex justify-content-center justify-content-lg-between safe-mode allow-drop">
            <div class="col-12 col-sm-10 col-lg-4 pb-5 text-center text-lg-start">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Awesome Title Here</h3>
            </div>

            <div class="col-12 col-sm-10 col-lg-7 allow-drop safe-mode">
                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">For business professionals caught between high OEM price and mediocre print and graphic output, there’s a solution: Business Express’s Eclipse line of compatible laser toner cartridges that meet </p>
                <br />

                    <module type="btn" button_style="btn-primary" text="Find Out"/>

            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
