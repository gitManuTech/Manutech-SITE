<?php

session_start();

require "db-connect.php";

function is_user_registered(string $sname, string $room): bool {
	$mysql = connect_db();
	$select = "SELECT student_name, student_classroom FROM student_tbl
	WHERE student_name = '".$sname."' AND student_course = '".$room."'";

	$query		= $mysql->query($select);
	$num_rows	= $query->num_rows;

	$mysql->close();
	$query->free();

	return ($num_rows >= 1);
}

function insert_into_db(string $sname, string $room, string $course): void {
	$mysql = connect_db();
	$insert = "INSERT INTO student_tbl(student_name, student_classroom, student_course)
	VALUES(\"".$sname."\", \"".$room."\", \"".$course."\")";

	$query = $mysql->query($insert);

	if(!$query) {
		echo "Não foi possível efetuar o cadastro";
		exit(1);
	}

	$mysql->close();
	$query->free();
}

// TODO: create DIR with functions to insert data into DB
// TODO: Remove "query" and replace it with "prepare" statements

$student_name		= $_POST["student-name"];
$student_classroom	= $_POST["student-classroom"];
$student_course		= $_POST["student-course"];

$mysql = connect_db();

if(is_user_registered($student_name, $student_course)) {
	echo "Usuário já possui conta.";
	exit(1);
}

insert_into_db($student_name, $student_classroom, $student_course);

$_SESSION["sname"]	= $student_name;
$_SESSION["sroom"]	= $student_classroom;
$_SESSION["scourse"]	= $student_course;

header("Location: ./profile.php");

?>
