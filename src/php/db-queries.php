<?php

require_once "db-connect.php";

function get_credentials(string $sname, string $sclass, string $scourse)
: mysqli_result | bool {
	$mysql	= connect_db();
	$select	= "SELECT student_name, student_classroom, student_course 
		FROM student_tbl WHERE
		student_name = \"".$sname."\"
		AND student_classroom = \"".$sclass."\"
		AND student_course = \"".$scourse."\"";

	$query	= $mysql->query($select);

	return $query;
}

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

function insert_into_db(string $sname, string $room, string $course): void {
	$mysql = connect_db();
	$insert = "INSERT INTO student_tbl(student_name, student_classroom, student_course)
		VALUES(\"".$sname."\", \"".$room."\", \"".$course."\")";

	$query = $mysql->query($insert);

	$mysql->close();
}

/**
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.0.0				Will disable the student's account setting
 * 						the flag "student_active" to 0
 * @since	1.0.0
 * */
function disable_student_acc(string $sname): void {
	$mysql	= connect_db();
	$update	= "UPDATE student_tbl SET student_active = 0 WHERE student_name = \"".$sname."\"";

	$mysql->query($update);
}

function is_info_in_db(string $student_info, string $db_data): bool {
	return ($student_info === $db_data);
}

?>
