<?php

/*

type: layout

name: Contacts 13

position: 13

categories: Contact Us

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
    <div class="mw-layout-container no-element allow-drop container edit safe-mode safe-mode no-typing" field="layout-contacts-skin-13-<?php print $params['id'] ?>" rel="module">
        <div class="row safe-mode">

            <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="text-center mb-5">Our Contacts</h3>

            <div class="col-md-6 mx-auto mt-5">
                    <h6 data-mwplaceholder="<?php _e('Enter text here'); ?>" >Phone: +1-123-456-78</h6>
                    <h6 data-mwplaceholder="<?php _e('Enter text here'); ?>" >Email:  <a href="mailto:info@company.com">info@company.com</a></h6>
                <br/>
                <br/>
                <br/>


                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" >Add your company address here</p>
                <module type="social_links" template="skin-1" />
            </div>

            <div class="col-md-6 mx-auto">
                <module type="contact_form" template="skin-5"/>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
