<?php

session_start();
session_abort();
session_unset();
session_destroy();

header("HTTP /1.1 200 OK");
header("Locationl ../../Public/html/index.html");

?>
