<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";
require_once "../Enums/database.php";

use Database\Enums;
use Database\Checkage;

$has_no_reg = Database\Enums\STUDENT_STAT::HAS_NO_REG;
$acc_disabled = Database\Enums\STUDENT_ACC::DISABLED;

$name	= trim($_POST["student-name"]);
$ra	= trim($_POST["student-ra"]);
$course = trim($_POST["student-course"]);

if(Database\Checkage\is_student_registered($ra) == $has_no_reg->value) {
	echo "Estundate não está registrado.";
	exit(1);
}

if(Database\Checkage\is_student_acc_disabled($ra) === $acc_disabled->value) {
	echo "Conta do estudante foi desabilitada.";
	exit(1);
}

$student = get_credentials($ra)->fetch_row();

$_SESSION["uid"]	= $student[0];
$_SESSION["sname"]	= $student[1];
$_SESSION["sra"]	= $student[2];
$_SESSION["scourse"]	= $student[3];

header("Location: ../Student/profile.php");

?>
