<?php

session_start();

require_once "db-queries.php";
require_once "db-query-check.php";

$name		= $_POST["student-name"];
$classroom	= $_POST["student-classroom"];
$course		= $_POST["student-course"];

// TODO: Remove "query" and replace it with "prepare" statements

if(is_student_registered($name, $classroom, $course) == 0) {
	echo "Estundate não está registrado.";
	exit(0);
}

if(is_student_acc_disabled($name) === true) {
	echo "Conta do estudante foi desabilitada.";
	exit(0);
}

$student = get_credentials($name, $classroom, $course)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sroom"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ./profile.php");

?>
