<?php

/*

type: layout

name: Price Lists 9

position: 9

categories: Price Lists

*/

?>

<style>
    .price-lists-9 .card {
        border-color: #181E4E;
        border-radius: 0;
    }

    .price-lists-9 .card:hover {
        background-color: #181E4E;
    }

    .price-lists-9 .card li,  .price-lists-9 .card h1,  .price-lists-9 .card p,  .price-lists-9 .card .h1,  .price-lists-9 .card .h3 {
        color: #181E4E;

    }

    .price-lists-9 .card:hover li, .price-lists-9 .card:hover h1, .price-lists-9 .card:hover p, .price-lists-9 .card:hover .h1, .price-lists-9 .card:hover .h3, .price-lists-9 .card:hover small {
        color: #ffffff!important;
    }

    .price-lists-9 .btn.btn-primary {
        background-color: #181E4E!important;
        color: #ffffff!important;
        padding: 10px 30px!important;


    }

    .price-lists-9 .card:hover .btn.btn-primary {
        background-color: #61EFB3!important;
        color: #ffffff!important;
    }



    .price-list-9-hr {
        border-color: #181E4E!important;
        border-top: 3px solid #181E4E!important;
        opacity: 1;
        margin-top: 40px;
        margin-bottom: 0;
    }

    .price-lists-9 .card:hover .price-list-9-hr {
        border-color: #ffffff!important;
        border-top: 3px solid #ffffff!important;
    }

</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="price-lists-9 <?php print $layout_classes; ?> section edit safe-mode  " field="layout-price-lists-skin-9-<?php print $params['id'] ?>" rel="module" >
    <div class="container-fluid">

        <div class="row mx-auto justify-content-center">
            <div class="text-center">
                <h1 style="color: #181E4E;">Flexible Pricing Plans That <br> Suits With Your Needs</h1>
                <p class="lead mt-4" style="color: #737272;">Monthly Plans Offers Lower Price</p>
            </div>

            <module type="tabs" template="merry-price">

        </div>
    </div>
</section>

