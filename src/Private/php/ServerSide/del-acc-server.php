<?php

session_start();

require_once "../Database/db-queries.php";

disable_student_acc($_SESSION["sra"]);

header("Location: ../../../Public/html/index.html");

?>
