<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";
require_once "../Enums/UserAccStat.php";
// require_once "json.php";

use Enums\UserAccStat;
use Database\Checkage;

// $student_data = get_json();

$has_reg = Enums\UserAccStat\STUDENT_STAT::HAS_REG;

$name	= trim($_POST["student-name"]);
$ra	= trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(Database\Checkage\is_student_registered($ra) == $has_reg->value) {
	echo "Estudante já possui conta.";
	exit(1);
}

insert_into_db($name, $ra, $course);

$student = get_credentials($ra)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sra"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ../Student/profile.php");

?>
