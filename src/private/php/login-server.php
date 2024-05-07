<?php

session_start();

require_once "db-queries.php";
require_once "db-query-check.php";

$incoming_json	= file_get_contents("php://input");
$json_decoded	= json_decode($incoming_json, true);

// TODO: Remove "query" and replace it with "prepare" statements

$name		= $json_decoded["student-name"];
$classroom	= $json_decoded["student-classroom"];
$course		= $json_decoded["student-course"];

if(is_student_registered($name, $class, $course) == 0) {
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
