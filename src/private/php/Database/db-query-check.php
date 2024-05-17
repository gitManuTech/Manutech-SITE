<?php

require_once "db-queries.php";

/**
 * This function will check if the student is already registered in the DB
 *
 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
 * @version	2.0.1				Will return an int that represents the student row
 * @since	1.0.0
 *
 * @param string $sname the student name
 * @param string $sclass the student class
 * @param string $scourse the student course
 *
 * @return int
 * */
function is_student_registered(string $sname, string $sclass, string $scourse): int {
	$student_data = get_credentials($sname, $sclass, $scourse);

	if(!$student_data) {
		return 0;
	}

	return $student_data->num_rows;
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
function is_student_acc_disabled(string $sname): bool {
	$mysql		= connect_db();
	$select_status	= "SELECT student_active FROM student_tbl
				WHERE student_name = \"".$sname."\"";

	$query		= $mysql->query($select_status);
	$acc_status	= $query->fetch_array(MYSQLI_NUM);

	return (intval($acc_status[0]) === 0);
}

?>
