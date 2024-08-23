<?php

require_once "db-connect.php";
require_once "db-student-queries.php";

/**
 * This function get student information from DB
 *
 * This function will get student info with parameters on the DB, will return a
 * _mysqli_result_ or a _bool_ that indicates failure
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	2.0.1				Will get student information from DB with parameters
 * @since	1.0.0
 *
 * @param string $sname The student name to use
 * @param string $sclass The student classroom
 * @param string $scourse The student course
 *
 * @return mysqli_result|bool
 * */
function get_credentials(string $sra): mysqli_result | bool {
	$mysql = connect_db();
	$query = "SELECT student_id, student_name, student_ra, student_course
		FROM student_tbl WHERE student_ra = ?";

	$student_data = query_with_ra($query, $sra):

	return $student_data;
}

/**
 * This function will insert information into DB
 *
 * This function will put the student information into the DB,
 * return value is void
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	2.0.1				Will get student information from DB with parameters
 * @since	1.0.0
 *
 * @param string $sname The student name to use
 * @param string $sclass The student classroom
 * @param string $scourse The student course
 * */
function insert_into_db(string $sname, string $sra, string $scourse): void {
	$mysql	= connect_db();
	$insert = "INSERT INTO
		student_tbl(student_name, student_ra, student_course) VALUES(?, ?, ?)";

	$stmt	= $mysql->prepare($insert);

	$stmt->bind_param("sss", $sname, $sra, $scourse);
	$stmt->execute();
	$stmt->close();
	$mysql->close();

	$mysql = NULL;
}

/**
 * This function will disable student's account
 *
 * Will disable the student's account, setting the flag "student_active" to 0
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.0.0				Will disable the student's account
 * @since	1.0.0
 *
 * @param string $sname
 * */
function disable_student_acc(string $sra): void {
	$mysql	= connect_db();
	$update	= "UPDATE student_tbl SET student_active = 0 WHERE student_ra = ?";

	$stmt = $mysql->prepare($update);

	$stmt->bind_param("s", $sra);
	$stmt->execute();
	$stmt->close();
	$mysql->close();

	$mysql = NULL;
}

?>
