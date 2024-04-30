<?php

require_once "db-connect.php";

// https://www.php.net/manual/en/mysqli-result.fetch-assoc.php#refsect1-mysqli-result.fetch-assoc-returnvalues
function get_credentials(string $sname, string $sclass, string $scourse): mysqli_result {
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
 * @version	2.0.1				Will return an int that represents if the student row
 * @since	1.0.0
 *
 * @return	int
 * */
function is_student_registered(string $sname, string $sclass, string $scourse): int {
	$student_data = get_credentials($sname, $sclass, $scourse);

	return $student_data->num_rows;
}

function insert_into_db(string $sname, string $room, string $course): void {
	$mysql = connect_db();
	$insert = "INSERT INTO student_tbl(student_name, student_classroom, student_course)
	VALUES(\"".$sname."\", \"".$room."\", \"".$course."\")";

	$query = $mysql->query($insert);

	$mysql->close();
}

?>
