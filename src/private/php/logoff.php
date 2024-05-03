<?php

echo "Deslogando da conta...";

session_start();
session_abort();
session_unset();
session_destroy();

header("HTTP /1.1 200 OK");
header("Location: ../html/index.html");

?>
