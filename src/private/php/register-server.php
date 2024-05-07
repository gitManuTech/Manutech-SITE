<?php

session_start();

require_once "db-queries.php";

$incoming_json	= file_get_contents("php://input");
$json_decoded	= json_decode($incoming_json, true);

// TODO: Remove "query" and replace it with "prepare" statements

$name		= $json_decoded["student-name"];
$classroom	= $json_decoded["student-classroom"];
$course		= $json_decoded["student-course"];

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
