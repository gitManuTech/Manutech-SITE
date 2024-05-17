<?php

session_start();

require_once "Database/db-queries.php";
// require_once "json.php";

// $student_data = get_json();

$name		= $_POST["student-name"];
$classroom	= $_POST["student-classroom"];
$course		= $_POST["student-course"];

if(is_student_registered($name, $classroom, $course) == 1) {
	echo "Usuário já possui conta.";
	exit(1);
}

insert_into_db($name, $classroom, $course);

$student = get_credentials($name, $classroom, $course)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sroom"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ./profile.php");

?>
