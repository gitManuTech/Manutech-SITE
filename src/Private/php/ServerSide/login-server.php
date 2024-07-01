<?php

session_start();

require_once "../Database/db-queries.php";
require_once "../Database/db-query-check.php";
require_once "../Enums/UserAccStat.php";

use Database\Checkage;
use Enums\UserAccStat;

$has_no_reg = Enums\UserAccStat\StudentStat::HAS_NO_REG;
$acc_disabled = Enums\UserAccStat\StudentAcc::DISABLED;

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
