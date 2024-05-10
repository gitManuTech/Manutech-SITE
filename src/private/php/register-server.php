<?php

session_start();

require_once "db-queries.php";
// require_once "json.php";

// $student_data = get_json();

$name		= $_POST["student-name"];
$classroom	= $_POST["student-classroom"];
$course		= $_POST["student-course"];

if(is_student_acc_disabled($name) == true) {
	echo "Conta do estudante foi desabilitada";
	exit(0);
}

if(is_student_registered($name, $classroom, $course) == 1) {
	echo "Usuário já possui conta.";
	exit(1);
}

insert_into_db($name, $classroom, $course);

$_SESSION["sname"]	= $name;
$_SESSION["sroom"]	= $classroom;
$_SESSION["scourse"]	= $course;

header("Location: ./profile.php");

?>
