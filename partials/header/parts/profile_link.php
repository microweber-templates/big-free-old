<?php if ($profile_link == 1): ?>
    <script>
        var $window = $(window), $document = $(document);
        $document.ready(function () {
            $('.js-register-modal').on('click', function () {
                $(".js-login-window").hide();
                $(".js-forgot-window").hide();
                $(".js-register-window").show();
            });
            $('.js-login-modal').on('click', function () {
                $(".js-register-window").hide();
                $(".js-forgot-window").hide();
                $(".js-login-window").show();
            });
        });
    </script>
    <li class="dropdown btn-member ps-3">
        <a href="#" class="nav-link dropdown px-0" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mw-micon-User" style="font-size: 24px;"></i></a>
        <ul class="mw-big-dropdown dropdown-menu">
            <?php if (user_id()): ?>
                <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _lang("Profile", "templates/wine"); ?></a></li>
                <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _lang("My Orders"); ?></a></li>
            <?php else: ?>
                <li><a href="#" class="js-login-modal" data-toggle="modal" data-target="#loginModal"><?php _lang("Login", "templates/wine"); ?></a></li>
                <li><a href="#" class="js-register-modal" data-toggle="modal" data-target="#loginModal"><?php _lang("Register", "templates/wine"); ?></a></li>
            <?php endif; ?>

            <?php if (is_admin()): ?>
                <li><a href="<?php print admin_url() ?>"><?php _lang("Admin panel", "templates/wine"); ?></a></li>
            <?php endif; ?>

            <?php if (user_id()): ?>
                <li><a href="<?php print logout_url() ?>"><?php _lang("Logout", "templates/wine"); ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>
