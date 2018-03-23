<?php
/**
 * Created by PhpStorm.
 * User: gimseunghwan
 * Date: 2018. 3. 17.
 * Time: PM 9:31
 */




$user = 'root';
    $pass = 'root';
    $db = 'library';
    $host = 'localhost';
    $port = 3306;
    $db_charset = "utf8";

    $db_set = new DBConn($host,$user,$pass,$db,$port,$db_charset);
    $db_set->db_conn();
    $query = "select utc_timestamp()";
    echo $db_set->select_one($query);

?>