<?php

function connect_db(): mysqli|bool {
    $db_name = "handyman";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "ghostlyTr1nk37";
    
    $mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if(!$mysql) {
        echo "Não foi possível me conectar ao BD";
        exit(0);
    }

    return $mysql;
}

?>
