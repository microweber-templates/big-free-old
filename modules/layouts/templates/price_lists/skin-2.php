<?php

/*

type: layout

name: Price Lists 2

position: 2

categories: Price Lists

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


<section class="section <?php print $layout_classes; ?> edit     " field="layout-price-lists-skin-2-<?php print $params['id'] ?>" rel="module">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element   container">
        <div class="row col-12">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto cloneable element safe-mode">
                <div class="pe-lg-5 text-lg-start pb-5  ">
                    <img src="<?php print template_url(); ?>assets/img/layouts/coffee.jpg" class=" "/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-lg-start pb-5 d-flex flex-column cloneable element safe-mode">
                <div class="row   py-5 ">
                    <h4 class="">Our prices</h4>
                    <div class="col-12">
                        <div class="cloneable element safe-mode py-4">
                            <h6 class="safe-element">Espresso</h6>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Espresso</span><span class="col-4 justify-content-end text-end text-right px-0">$ 3.25</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Americano</span><span class="col-4 justify-content-end text-end text-right px-0">$ 3.50</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Macchiato</span><span class="col-4 justify-content-end text-end text-right px-0">$ 3.75</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Cortado</span><span class="col-4 justify-content-end text-end text-right px-0">$ 4.25</span></p>
                        </div>
                    </div>

                    <div class="col-12 ">
                        <div class="cloneable element safe-mode py-4">
                            <h6 class="safe-element">Filter</h6>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Drip</span><span class="col-4 justify-content-end text-end text-right px-0">$ 3.00</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Drip au Lait</span><span class="col-4 justify-content-end text-end text-right px-0">$ 3.25</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Pour Over</span><span class="col-4 justify-content-end text-end text-right px-0">$ 4.50</span></p>
                        </div>
                    </div>

                    <div class="col-12 ">
                        <div class="cloneable element safe-mode py-4">
                            <h6 class="safe-element">Cold coffee</h6>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Cold Brew</span><span class="col-4 justify-content-end text-end text-right px-0">$ 4.00</span></p>
                            <p class="d-flex cloneable element safe-mode my-1"><span class="price-list-content col-8 safe-element px-0">Iced Latte</span><span class="col-4 justify-content-end text-end text-right px-0">$ 5.25</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
