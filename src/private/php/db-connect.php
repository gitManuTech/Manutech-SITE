<?php

function connect_db(): mysqli {
    $db_name = "handyman";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "ghostlyTr1nk37";
    
    $mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

    return $mysql;
}

?>
