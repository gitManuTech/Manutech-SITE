<?php namespace Database\Checkage;

require_once "../Database/db-student-queries.php";
require_once "../Enums/UserAccStat.php";
require_once "db-connect.php";

use Enums\UserAccStat;
use Database\StudentQuery;

/**
 * This function will check if the student is already registered in the DB
 *
 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
 * @version	2.1.0				Will return an int that represents the student row
 * @since	1.0.0
 *
 * @param string $sra Student register number
 *
 * @return int
 * */
function is_student_registered(string $sra): int {
	$has_reg = \Enums\UserAccStat\StudentStat::HAS_REG->value;
	$has_no_reg = \Enums\UserAccStat\StudentStat::HAS_NO_REG->value;

	$search_acc = "SELECT COUNT(1) FROM student_tbl WHERE student_ra = ?";

	$student_row = \Database\StudentQuery\query_with_ra($search_acc, $sra);

	return ($student_row[0] == $has_reg ? $has_reg : $has_no_reg);
}

/**
 * This function will check if the student account is disabled
 *
 * This function will see if the account was disabled
 *
 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
 * @version	1.0.0				Will return an bool that represents the account status
 * @since	1.0.0
 *
 * @param string $sra Student register number
 *
 * @return int
 * */
function is_student_acc_disabled(string $sra): int {
	$disabled = \Enums\UserAccStat\StudentAcc::DISABLED->value;
	$enabled = \Enums\UserAccStat\StudentAcc::ENABLED->value;

	$acc_query = "SELECT student_active FROM student_tbl WHERE student_ra = ?";

	$acc_status = \Database\StudentQuery\query_with_ra($acc_query, $sra);

	return ($acc_status[0] == $disabled ? $disabled : $enabled);
}

?>
