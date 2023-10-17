<?php
/*

type: layout

name: Content 67

position: 67

categories: Content

*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section   <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element allow-drop text-center allow-drop edit nodrop no-typing" field="layout-skin-content-67-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <img class="safe-element" style=" max-width: 500px;" src="<?php print template_url(); ?>assets/img/decoration-2.svg"/>
                <h2 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="my-md-5 my-3">Our Best Moments</h2>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" style="text-align-last: center; text-align: justify !important;">If you are about to organize your wedding, you are probably looking for ideas to make your wedding party (depending on the style you choose) fun, unconventional and different. There is no limit to the newlyweds' imagination, especially when they want to organize something special to surprise, entertain and entertain their guests, and there are so many things you can add to your wedding to give it a pinch of uniqueness. In this article you will find 11 original ideas for your Wedding that will surely make you think “I want it too!” Including interesting ideas for wedding decorations, wedding invitations, photos, and the preparation for the wedding itself.</p>
                <br><br>
                <module type="btn" button_text="Learn more"/>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>











