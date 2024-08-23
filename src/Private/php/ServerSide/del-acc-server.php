<?php

require_once "../Database/db-queries.php";

disable_student_acc($_POST["sra"]);

header("Location: ../../../Public/html/index.html");

?>
