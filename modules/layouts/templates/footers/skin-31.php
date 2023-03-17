<?php

/*

type: layout

name: Footers 31

position: 31

categories: Footers

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

<section class=" footer-background <?php print $layout_classes; ?> safe-mode" style="background-color: #FF7A01!important;">
    <div class="container-fluid">
        <div class="col-10 mx-auto">
            <div class="row gap-y align-items-center">
                <div class="col-md-3 text-center text-md-start">
                    <module type="logo" id="footer-logo-<?php print $params['id']; ?>"/>

                </div>

                <div class="col-md-6">
                    <module type="menu" template="simple" data-class="nav nav-center justify-content-center" id="footer_menu" name="footer_menu"  />
                </div>

                <div class="col-md-3 text-center text-md-end edit" field="footer-p-skin-23-<?php print $params['id'] ?>" rel="module">
                    <p class="lead "  style="color: #ffffff;">+359 112 333 888</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="edit"  field="footer-reserved-skin-23-<?php print $params['id'] ?>" rel="global">
                        <p class="lead" style="color: #ffffff;">© All Rights Reserved.</p></div>
                    <p  class="mb-0 mt-3 noedit lead" style="color: #FFFFFF"><?php print powered_by_link(); ?></p>
                </div>
            </div>
        </div>
    </div>

</section>

