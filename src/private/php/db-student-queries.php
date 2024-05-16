<?php

require_once "db-connect.php";
require_once "db-data-format.php";

// TODO: use namespaces

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


function select_posts(int $uid): mysqli_result {
	$mysql = connect_db();
	$posts = "SELECT problem_title Title, problem_desc DSC, problem_block Block
		FROM problem_tbl WHERE problem_tbl.student_id =".intval($uid)." LIMIT 10";

	$result = $mysql->query($posts);

	$mysql->close();

	$mysql = NULL;

	return $result;
}

// TODO: combine this with display_posts() function
function display_all_posts(): void {
	$posts = select_all_student_posts();

	while($post_data = $posts->fetch_assoc()) {
		generate_post_home($post_data["Title"], $post_data["DSC"], $post_data["Block"], $post_data["Author"]);
	}
}

function display_posts(int $uid): void {
	$posts = select_posts($uid);

	while($post_data = $posts->fetch_assoc()) {
		generate_post_profile($post_data["Title"], $post_data["DSC"], $post_data["Block"]);
	}
}

function send_problem_data(string $ptitle, string $pblock, string $pdesc, int $uid): void {
	$mysql		= connect_db();
	$complain	= <<<END
		INSERT INTO problem_tbl(
			problem_title, problem_block, problem_desc, student_id
		)
		VALUES( "{$ptitle}", "{$pblock}", "{$pdesc}", "{$uid}" )
	END;

	$mysql->query($complain);
	$mysql->close();
}

?>
