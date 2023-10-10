<?php

/* Sticky nav */

$sticky_navigation = get_option('sticky_navigation', $params['id']);
if ($sticky_navigation == '') {
    $sticky_navigation = 'true';
}

// THIS IS PREMIUM LAYOUT, PLEASE BUY LICENSE KEY FROM https://microweber.com
?>