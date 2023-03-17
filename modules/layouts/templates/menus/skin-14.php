<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-14
  position: 14
  description: Menu - skin-14
  categories: Menu


*/

?>
<section class="header-background">
    <?php
    $default_contact_us_link = 'yes';
    $default_header_socials = 'no';
    $default_phone_text = 'no';
    $default_profile_link = 'no';
    $default_search_bar = 'no';
    $default_shopping_cart = 'no';
    $default_multilanguage = 'yes';
    $default_is_sticky_nav = 'no';

    include(__DIR__.'/settings_is_search_bar_front.php');
    include(__DIR__.'/settings_is_shopping_cart_front.php');
    include(__DIR__.'/settings_is_contact_us_link_front.php');
    include(__DIR__.'/settings_is_header_socials_front.php');
    include(__DIR__.'/settings_is_phone_front.php');
    include(__DIR__.'/settings_is_profile_link_front.php');
    include(__DIR__.'/settings_is_sticky_nav_front.php');
    include(__DIR__.'/settings_is_multilanguage_front.php');

    ?>

    <div class="container-fluid px-xl-5 px-0 justify-content-center">
        <div class="row col-12 d-flex justify-content-center ">
            <div class="menu-header-skin-7  col-xl-4 py-xl-2 py-4 d-block order-3 order-xl-1 d-flex justify-content-md-start justify-content-center">
               <div class="header-menu-nav-body ">

                    <nav class="nav">
                        <div class="nav--bar">
                            <!-- nav toggle -->
                            <button class="nav--toggle">
                                      <span class="nav--label-container">
                                        <span class="nav--label">Menu</span>
                                        <span class="nav--label">Close</span>
                                      </span>
                                <span class="nav--navicon">
                                        <span class="nav--navicon-line"></span>
                                        <span class="nav--navicon-line"></span>
                                        <span class="nav--navicon-line"></span>
                                      </span>
                            </button>
                        </div>

                        <!-- nav menu backdrop -->
                        <div class="nav--menu-backdrop"></div>

                        <!-- nav menu bg -->
                        <div class="nav--menu-bg"></div>

                        <!-- nav menu -->
                        <div class="nav--menu">
                            <div class="nav--menu-container">
                                <module type="menu" name="header_menu" id="header_menu-<?php print $params['id']; ?>" template="menu-skin-7"/>
                            </div>
                        </div>
                    </nav>
               </div>
            </div>
            <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="d-sm-block d-none mx-auto order-xl-2 col-auto col-xl-4 mw-big-header-logo w-auto align-self-center  my-md-0 my-1 module module-logo "/>

            <div class="col col-xl-4 d-flex  order-2 order-xl-3 justify-content-end mx-auto mx-xl-0 my-md-0 my-1">
                <ul class="nav nav-navbar align-items-center justify-content-md-end justify-content-center">
                    <?php include template_dir() . "partials/header/parts/search_bar.php"; ?>
                    <?php include template_dir() . "partials/header/parts/contact.php"; ?>
                    <?php include template_dir() . "partials/header/parts/socials.php"; ?>
                    <?php include template_dir() . "partials/header/parts/multilanguage.php"; ?>
                    <?php include template_dir() . "partials/header/parts/phone.php"; ?>
                    <?php include template_dir() . "partials/header/parts/profile_link.php"; ?>
                    <?php include template_dir() . "partials/header/parts/shopping_cart.php"; ?>
                </ul>
            </div>
        </div>
    </div>
</section>




