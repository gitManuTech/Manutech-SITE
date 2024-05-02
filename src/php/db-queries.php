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

function insert_into_db(string $sname, string $room, string $course): void {
	$mysql = connect_db();
	$insert = "INSERT INTO student_tbl(student_name, student_classroom, student_course)
		VALUES(\"".$sname."\", \"".$room."\", \"".$course."\")";

	$query = $mysql->query($insert);

	$mysql->close();
}

/**
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.0.0				Will disable the student's account, setting
 * 						the flag "student_active" to 0
 * @since	1.0.0
 * */
function disable_student_acc(string $sname): void {
	$mysql	= connect_db();
	$update	= "UPDATE student_tbl SET student_active = 0 WHERE student_name = \"".$sname."\"";

	$mysql->query($update);
	$mysql->close();
}

?>
