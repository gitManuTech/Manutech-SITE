<?php

/**
 * This function will try to connect to the DB
 *
 * @author	João Paulo Ferrari Sant'Ana joaopauloferrarisantana@gmail.com
 * @version	1.0.0
 * @since	1.0.0
 *
 * @return mysqli
 * */
function connect_db(): mysqli {
    $db_name = "handyman";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "ghostlyTr1nk37";
    
    $mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

    return $mysql;
}

?>
