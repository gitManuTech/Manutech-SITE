<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";
// require_once "json.php";

// $student_data = get_json();

$name	= trim($_POST["student-name"]);
$ra	= trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(is_student_registered($name, $ra, $course) == 1) {
	echo "Estudante já possui conta.";
	exit(1);
}

insert_into_db($name, $ra, $course);

$student = get_credentials($name, $ra, $course)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sra"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ../Student/profile.php");

?>
