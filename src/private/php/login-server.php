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

$_SESSION["sname"]	= $name;
$_SESSION["sroom"]	= $class;
$_SESSION["scourse"]	= $course;

header("Location: ./profile.php");

?>
