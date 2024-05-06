<?php

require_once "db-queries.php";

/**
 * @author	João Paulo Ferrari Sant'Ana 	joaopauloferrarisanta@gmail.com
 * @version	2.0.1				Will return an int that represents the student row
 * @since	1.0.0
 *
 * @return	int
 * */
function is_student_registered(string $sname, string $sclass, string $scourse): int {
	$student_data = get_credentials($sname, $sclass, $scourse);

	if(!$student_data) {
		return 0;
	}

	return $student_data->num_rows;
}

function is_student_acc_disabled(string $sname): bool {
	$mysql		= connect_db();
	$select_status	= "SELECT student_active FROM student_tbl
				WHERE student_name = \"".$sname."\"";

	$query		= $mysql->query($select_status);
	$acc_status	= $query->fetch_array(MYSQLI_NUM);

	return (intval($acc_status[0]) === 0);
}

function is_info_in_db(string $student_info, string $db_data): bool {
	return ($student_info === $db_data);
}

?>
