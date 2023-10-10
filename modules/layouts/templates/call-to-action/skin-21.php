<?php

/*

type: layout

name: Call to action 21

position: 21

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

<section class="section <?php print $layout_classes; ?> edit nodrop" field="layout-call-to-action-skin-21-<?php print $params['id'] ?>" rel="module">


    <div class="mw-layout-background-block">
        <div class="mw-layout-background-node"></div>
        <div class="mw-layout-background-overlay"></div>
    </div>

 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element-allow-drop container">
        <div class="row mb-6">
            <div class="col-12 allow-drop text-center">
                <h1>More about the event</h1>
                <p class="lead-2">Please full the form below to make an on-line reservation</p>

                <div class="d-md-flex justify-content-center text-center nodrop">
                    <div class="col mb-4 cloneable">
                        <div class="h-100 d-flex flex-column py-5">
                            <div class="d-block d-sm-flex align-items-center h-100 text-center justify-content-center">
                                <div class="allow-drop">
                                    <i class="mdi mdi-account-check-outline icon-size-70px mb-4 d-inline-block safe-element"></i>
                                    <p class="mb-0">Some text here about</p>
                                    <h3>> 50,000</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4 cloneable">
                        <div class="h-100 d-flex flex-column py-5">
                            <div class="d-block d-sm-flex align-items-center h-100 text-center justify-content-center">
                                <div class="allow-drop">
                                    <i class="mdi mdi-rocket-outline icon-size-70px mb-4 d-inline-block safe-element"></i>
                                    <p class="mb-0">Some text here about</p>
                                    <h3>32,000</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4 cloneable">
                        <div class="h-100 d-flex flex-column py-5">
                            <div class="d-block d-sm-flex align-items-center h-100 text-center justify-content-center">
                                <div class="allow-drop">
                                    <i class="mdi mdi-map-marker-radius-outline icon-size-70px mb-4 d-inline-block safe-element"></i>
                                    <p class="mb-0">Some text here about</p>
                                    <h3>> 50,000</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    <module type="btn" button_style="btn-primary" button_size="px-5" button_text="Subscribe" />

            </div>
        </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
