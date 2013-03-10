<?php
/**
 * Customers Online
 *
 * @copyright   Copyright (c) 2013 CommerceCoding (http://www.commerce-coding.de/)
 * @author      Alexander Diebler
 * @license     http://opensource.org/licenses/GPL-2.0  GNU General Public License, version 2 (GPL-2.0)
 */

// create box smarty
$box_smarty = new smarty;
$box_smarty->assign('tpl_path', 'templates/'.CURRENT_TEMPLATE.'/');
$box_smarty->assign('language', $_SESSION['language']);

// delete inactive users
$xx_mins_ago = (time() - 900);
xtc_db_query("delete from " . TABLE_WHOS_ONLINE . " where time_last_click < '" . $xx_mins_ago . "'");

// count active users
$online_query = xtc_db_query("select customer_id from " . TABLE_WHOS_ONLINE);
$box_smarty->assign('CUSTOMERS_ONLINE', xtc_db_num_rows($online_query));

// set cache ID
if (!CacheCheck()) {
  $cache=false;
  $box_smarty->caching = 0;
}
else {
  $cache=true;
  $box_smarty->caching = 1;
  $box_smarty->cache_lifetime = CACHE_LIFETIME;
  $box_smarty->cache_modified_check = CACHE_CHECK;
  $cache_id = $_SESSION['language'];
}

// set box template
$box_usersonline = $box_smarty->fetch(CURRENT_TEMPLATE.'/boxes/box_customers_online.html', $cache_id);
$smarty->assign('box_CUSTOMERS_ONLINE', $box_usersonline);
?>