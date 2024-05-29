<?php

require_once "Database/db-data-format.php";
require_once "Database/db-student-queries.php";

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

?>
