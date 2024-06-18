<?php

require_once "db-connect.php";

/**
 * This function will execute a JOIN in the Database
 * and get all posts to display at the homepage
 * 
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.0.0				Will select all posts made by students
 * @since	2.0.0
 *
 * @returns mysqli_result
 * */
function select_all_student_posts(): mysqli_result {
	$mysql = connect_db();

	// will search table "Problem" and will query for students that made posts
	// I think that... we can optimise this query
	$select_all_posts = "SELECT Problem.problem_title Title, Problem.problem_desc DSC,
		Problem.problem_block Block, Student.student_name Author
		FROM problem_tbl Problem
		INNER JOIN student_tbl Student ON Problem.student_id = Student.student_id;";

	$data = $mysql->query($select_all_posts);

	return $data;
}

/**
 * This function will select all posts made by one user and display at his profile
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	1.0.0				Will select all posts made by student
 * @since	2.0.0
 *
 * @param int $uid the user id in the database
 *
 * @returns mysqli_result
 * */
function select_posts(int $uid): mysqli_result {
	$mysql		= connect_db();
	$stu_posts	= "SELECT problem_title Title, problem_desc DSC, problem_block Block
		FROM problem_tbl WHERE problem_tbl.student_id = ? LIMIT 10";

	$stmt = $mysql->prepare($stu_posts);

	$stmt->bind_param("i", $uid);
	$stmt->execute();

	$result = $stmt->get_result();

	$stmt->close();

	return $result;
}

/**
 *
 * */
function send_problem_data(string $ptitle, string $pblock, string $pdesc, int $uid): void {
	$mysql		= connect_db();
	$complain	= "INSERT INTO
		problem_tbl(problem_title, problem_block, problem_desc, student_id)
		VALUES(?, ?, ?, ?)";

	$stmt = $mysql->prepare($complain);

	$stmt->bind_param("sssi", $ptitle, $pblock, $pdesc, $uid);
	$stmt->execute();
	$stmt->close();
}

/**
 *
 * */
function update_course(string $course_to_update, int $sra): void {
	$mysql		= connect_db();
	$alter_course	= "UPDATE student_tbl SET student_course = ? WHERE student_ra = ?";

	$stmt = $mysql->prepare($alter_course);

	$stmt->bind_param("si", $course_to_update, $sra);
	$stmt->execute();
	$stmt->close();
	$mysql->close();

	$mysql = NUll;
}

?>
