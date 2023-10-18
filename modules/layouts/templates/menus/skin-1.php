<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-1
  position: 1
  description: Menu - skin-1
  categories: Menu


*/

include(__DIR__.'/settings_is_sticky_nav_front.php');

?>


<?php
$header_top_menu = get_option('header_top_menu', 'header-layout');
if ($header_top_menu) {
    ?>
    <div class="templates-top-header-menu">
        <?php include template_dir() . "modules/layouts/templates/menus/templates-top-header-menu.php"; ?>
    </div>
    <?php
}
?>


<section class="header-background">

    <style>


        /*    .navbar.navbar-expand-xl {*/
        /*        overflow: hidden;*/
        /*    }*/

    </style>

    <nav class="navbar navbar-expand-xl navbar-light <?php if($sticky_navigation == "yes"):?> mw-header-sticky-nav <?php endif; ?>  header-style-3">
        <div class="container-fluid px-0 px-xl-5 justify-content-center">
            <div class="row col-12 d-flex flex-wrap justify-content-between">
                <div class="d-block d-xl-none col-lg-4 py-2 mw-big-navbar-toggler order-3 order-lg-1 d-flex justify-content-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-text header-menu-toggle-button"></span>
                    </button>

                </div>
                <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="d-flex me-lg-auto col-auto col-lg-4 mw-big-header-logo w-auto align-self-center module module-logo my-md-0 my-1"/>

                <div class="col-lg-auto col-12 d-flex mx-md-0 mx-auto justify-content-center order-3 order-xl-2">
                    <div class="collapse navbar-collapse top-0 bottom-0 justify-content-center" id="navbarSupportedContent" style="z-index: 9;">
                        <module type="menu" name="header_menu" id="header_menu-<?php print $params['id']; ?>" template="navbar" class="nav-holder"/>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</section>




