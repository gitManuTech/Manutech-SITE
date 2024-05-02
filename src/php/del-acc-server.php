<?php

require_once "db-queries.php";

session_start();

disable_student_acc($_SESSION["sname"], $_SESSION["sroom"], $_SESSION["scourse"]);

header("Location: ../html/index.html");

?>
