<?php
/**
 * Created by PhpStorm.
 * User: gimseunghwan
 * Date: 2018. 3. 14.
 * Time: PM 5:23
 */
echo "1";
require_once "DB/dbConn.php";
require_once "DB/db_link.php";
echo $HTTP_SERVER_VARS;

$user_info = $db_set->select_one($query)
//echo "TEST WORLD";

?>