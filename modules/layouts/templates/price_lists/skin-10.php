<?php

/*

type: layout

name: Price Lists 10

position: 10

categories: Price Lists

*/

?>

<style>
    .price-lists-10 .card {
        border-color: #181E4E;
        border-radius: 0;
    }

    .price-lists-10 .card:hover {
        background-color: #181E4E;
    }

    .price-lists-10 .card li,  .price-lists-10 .card h1,  .price-lists-10 .card p,  .price-lists-10 .card .h1,  .price-lists-10 .card .h3 {
        color: #181E4E;

    }

    .price-lists-10 .fa-star {
        color: #FF8910;
        margin-right: 15px;
    }

    .price-lists-10 .card:hover li, .price-lists-10 .card:hover h1, .price-lists-10 .card:hover p, .price-lists-10 .card:hover .h1, .price-lists-10 .card:hover .h3, .price-lists-10 .card:hover small {
        color: #ffffff!important;
    }

    .price-lists-10 .btn.btn-primary {
        background-color: #181E4E!important;
        color: #ffffff!important;
        padding: 10px 30px!important;


    }

    .price-lists-10 .card:hover .btn.btn-primary {
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

    .price-lists-10 .card:hover .price-list-9-hr {
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

<section class="price-lists-10 <?php print $layout_classes; ?> py-0 section edit safe-mode  " field="layout-price-lists-skin-10-<?php print $params['id'] ?>" rel="module" >
    <div class="container-fluid">

        <div class="row mx-auto justify-content-center">
            <div class="col-xl-12 d-flex flex-wrap justify-content-center">
               <div class="col-xl-3 col-lg-6 col-md-8 col-12 my-5 mx-4 cloneable">
                   <div class="card h-100 px-3">
                       <div class="nodrop card-body mt-3 mx-1 text-center">

                           <span class="h3">$</span><span class="h1">24</span>
                           <p class="my-4">Per Month</p>
                            <small class="my-3" style="line-height: 1.6; color: #737272;">In This Case, You buy a subscriiption to use the basic feutuers of The padio feutuers of The padio. You buy a subscriiption</small>
                           <hr class=" price-list-9-hr">
                       </div>
                       <div class="row justify-content-center mx-auto">
                           <ul class="list-unstyled text-start">
                               <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i> Listen Padio Podcasts</li>
                               <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i> Cusomer</li>
                               <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i> Listen Premium Podcasts</li>
                               <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i> Publish Podcasts</li>
                           </ul>
                       </div>

                       <div class=" mb-4">
                           <module type="btn" button_text="Basic Plan">
                       </div>

                   </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-8 col-12 my-5 mx-4 cloneable">
                   <div class="card h-100 px-3">
                       <div class="nodrop card-body mt-3 mx-1 text-center">


                           <span class="h3">$</span><span class="h1">24</span>
                           <p class="my-4">Per Month</p>
                            <small class="my-3" style="line-height: 1.6; color: #737272;">In This Case, eddition to the basic In This Case, You buy a subscriiption to use the basic feutuers You buy a subscriiption of The padio.</small>
                           <hr class=" price-list-9-hr">
                       </div>
                       <div class="row justify-content-center mx-auto">

                           <ul class="list-unstyled text-start">
                               <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i>Listen Padio Podcasts</li>
                               <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i>Cusomer</li>
                               <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i>Listen Premium Podcasts</li>
                               <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i>Publish Podcasts</li>
                           </ul>
                       </div>


                       <div class=" mb-4">
                           <module type="btn" button_text="Premium Plan">
                       </div>
                   </div>
               </div>

               <div class="col-xl-3 col-lg-6 col-md-8 col-12 my-5 mx-4 cloneable">
                   <div class="card h-100 px-3">
                       <div class="nodrop card-body mt-3 mx-1 text-center">


                           <span class="h3">$</span><span class="h1">100</span>
                           <p class="my-4">Per Month</p>

                          <small class="my-3" style=" line-height: 1.6; color: #737272;">In This Case, You buy a subscriiption to use the basic feutuers of The padio You buy a subscriiption feutuers of The padio.</small>
                           <hr class=" price-list-9-hr">
                       </div>
                       <div class="row justify-content-center mx-auto">
                               <ul class="list-unstyled text-start">
                                   <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i>Listen Padio Podcasts</li>
                                   <li class="my-4"><i class="mw-micon-Circular-Point me-1"></i>Cusomer</li>
                                   <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i>Listen Premium Podcasts</li>
                                   <li class="my-4"><i class="mw-micon-solid-Circular-Point me-1"></i>Publish Podcasts</li>
                               </ul>
                       </div>

                       <div class=" mb-4">
                           <module type="btn" button_text="Popular">
                       </div>
                   </div>
               </div>
           </div>

        </div>
    </div>
</section>

