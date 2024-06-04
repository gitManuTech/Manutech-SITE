<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";

$name	= $_POST["student-name"];
$ra	= $_POST["student-ra"];
$course = $_POST["student-course"];

if(is_student_registered($name, $ra, $course) == 0) {
	echo "Estundate não está registrado.";
	exit(0);
}

if(is_student_acc_disabled($name) === true) {
	echo "Conta do estudante foi desabilitada.";
	exit(0);
}

$student = get_credentials($name, $ra, $course)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sra"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ../profile.php");

?>
