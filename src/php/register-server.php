<?php

session_start();

require_once "db-queries.php";

// TODO: create DIR with functions to insert data into DB
// TODO: Remove "query" and replace it with "prepare" statements

$name		= $_POST["student-name"];
$classroom	= $_POST["student-classroom"];
$course		= $_POST["student-course"];

if(is_student_registered($name, $classroom, $course) >= 1) {
	echo "Usuário já possui conta.";
	exit(1);
}

insert_into_db($name, $classroom, $course);

$_SESSION["sname"]	= $name;
$_SESSION["sroom"]	= $classroom;
$_SESSION["scourse"]	= $course;

header("Location: ./profile.php");

?>
