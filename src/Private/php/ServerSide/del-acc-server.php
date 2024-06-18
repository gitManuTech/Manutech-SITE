<?php

session_start();

require_once "../Database/db-queries.php";

disable_student_acc($_SESSION["sname"], $_SESSION["sroom"], $_SESSION["scourse"]);

header("Location: ../../../Public/html/index.html");

?>
