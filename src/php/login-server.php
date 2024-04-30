<?php

session_start();

require_once "db-queries.php";

/*
 * No máximo do máximo a gente somente vai precisar somente verificar se
 * as informações cadastras no banco de dados
 * */

// tmp solution
// TODO: make it better
if(empty($_POST["student-name"]) || empty($_POST["student-classroom"]) || empty($_POST["student-course"])) {
	header("Location: ../html/login.html");
}

$name	= $_POST["student-name"];
$class	= $_POST["student-classroom"];
$course = $_POST["student-course"];

$student = get_student_credentials($name, $class, $course);

if(!$student) {
	echo "Estundate não está registrado.";
	exit(0);
}

$_SESSION["sname"]	= $name;
$_SESSION["sroom"]	= $class;
$_SESSION["scourse"]	= $course;

header("Location: ./profile.php");

?>
