<?php

/*

type: layout

name: Navbar

description: Navigation bar

*/

?>

<?php
$menu_filter['ul_class'] = 'navbar-nav';
$menu_filter['ul_class_deep'] = 'dropdown-menu ul-deep';
$menu_filter['li_class'] = 'nav-item';
$menu_filter['a_class'] = 'nav-link px-3';
//
$menu_filter['li_submenu_class'] = 'dropdown nav-item';
$menu_filter['li_submenu_a_class'] = 'nav-link px-3 dropdown-toggle';


$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link nav-link {active_class} {exteded_classes} {nest_level} {a_class}" {target_attribute} href="{url}"><span>{title}</span></a>';
$menu_filter['li_submenu_a_link'] = '<a itemprop="url" data-item-id="{id}" href="#"  role="button" class="menu_element_link nav-link {active_class} {exteded_classes} {nest_level} {li_submenu_a_class}" ><span class="name">{title}</span> <span class="caret"></span></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>

