<?php
/**
 * Created by PhpStorm.
 * User: gimseunghwan
 * Date: 2018. 3. 17.
 * Time: PM 9:31
 */

    $user = 'kimsh0212';
    $pass = 'kimsh01!' ;
    $db = 'kimsh0212';
    $host = 'localhost';
    $port = 3306;
    $db_charset = "utf8";

    $db_set = new DBConn($host,$user,$pass,$db,$port,$db_charset);
    $db_set->db_conn();
    echo "2-1";
//    $query = "select utc_timestamp()";
    $query = "
        select * from sh_user_info;
     ";
    echo "2-2";
    echo json_encode($db_set->select_one($query));
    echo "2-3";
?>