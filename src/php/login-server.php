<?php

session_start();

require_once "db-queries.php";

/*
 * No máximo do máximo a gente somente vai precisar somente verificar se
 * as informações cadastras no banco de dados
 * */

function is_info_in_db(string $student_info, string $db_data): bool {
	return ($student_info === $db_data);
}

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
