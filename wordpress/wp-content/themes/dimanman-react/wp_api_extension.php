<?php
/**
 * Created by IntelliJ IDEA.
 * User: stj
 * Date: 03/03/2018
 * Time: 10:14
 */
function dm_get_menu() {
    $menu = dm_get_menu_items_by_slug('dm_primary');
    return $menu;
}