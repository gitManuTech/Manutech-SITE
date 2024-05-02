<?php

session_start();

require_once "db-queries.php";
require_once "db-query-check.php";

// tmp solution
// TODO: make it better
if(empty($_POST["student-name"]) || empty($_POST["student-classroom"]) || empty($_POST["student-course"])) {
	header("Location: ../html/login.html");
}

$name	= $_POST["student-name"];
$class	= $_POST["student-classroom"];
$course = $_POST["student-course"];

if(is_student_registered($name, $class, $course) == 0) {
	echo "Estundate não está registrado.";
	exit(0);
}

if(is_student_acc_disabled($name)) {
	echo "Conta do estudante foi desabilitada.";
	exit(0);
}

$_SESSION["sname"]	= $name;
$_SESSION["sroom"]	= $class;
$_SESSION["scourse"]	= $course;

header("Location: ./profile.php");

?>
