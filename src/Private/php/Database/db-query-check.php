<?php

require_once "db-connect.php";

/**
 * This function will check if the student is already registered in the DB
 *
 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
 * @version	2.1.0				Will return an int that represents the student row
 * @since	1.0.0
 *
 * @param string $ra the student register number ("registro estudantil" on my language)
 *
 * @return int
 * */
function is_student_registered(string $sra): int {
	$mysql		= connect_db();
	$search_acc	= "SELECT COUNT(1) FROM student_tbl WHERE student_ra = ?";

	$stmt = $mysql->prepare($search_acc);

	$stmt->bind_param("s", $sra);
	$stmt->execute();

	$data		= $stmt->get_result();
	$acc_exist	= $data->fetch_array(MYSQLI_NUM);

	$stmt->close();
	$mysql->close();

	return $acc_exist[0];
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
 * @param string $sname the student name
 *
 * @return bool
 * */
function is_student_acc_disabled(string $sra): bool {
	$mysql		= connect_db();
	$acc_status	= "SELECT student_active FROM student_tbl WHERE student_ra = ?";

	$stmt = $mysql->prepare($acc_status);

	$stmt->bind_param("s", $sra);
	$stmt->execute();

	$query	= $stmt->get_result();
	$status = $query->fetch_array(MYSQLI_NUM);

	$stmt->close();

	return (intval($status[0]) === 0);
}

?>
