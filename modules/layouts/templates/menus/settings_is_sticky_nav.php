<?php
$sticky_navigation = get_option('sticky_navigation', $params['id']);

if ($sticky_navigation == '') {
    $sticky_navigation = $default_is_sticky_nav;
}







 
 
?>