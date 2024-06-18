<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";

$name	= trim($_POST["student-name"]);
$ra	= trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(is_student_registered($ra) == 0) {
	echo "Estundate não está registrado.";
	exit(1);
}

if(is_student_acc_disabled($ra) === true) {
	echo "Conta do estudante foi desabilitada.";
	exit(1);
}

$student = get_credentials($ra)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sra"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ../Student/profile.php");

?>
