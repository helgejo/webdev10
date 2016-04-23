<?php
/**
 * Booking admin
 */

require("smarty_init.inc.php");
// init session
session_start();
$smarty->display("admin_index.tpl");

