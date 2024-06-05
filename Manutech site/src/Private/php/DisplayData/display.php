<?php

require_once "../Database/db-data-format.php";
require_once "../Database/db-student-queries.php";

function display_all_posts(): void {
	$posts = select_all_student_posts();

	while($post_data = $posts->fetch_assoc()) {
		$title	= $post_data["Title"];
		$desc	= $post_data["DSC"];
		$block	= $post_data["Block"];
		$author	= $post_data["Author"];

		generate_post_home($title, $desc, $block, $author);
	}
}

function display_posts(int $uid): void {
	$posts = select_posts($uid);

	while($post_data = $posts->fetch_assoc()) {
		$title	= $post_data["Title"];
		$desc	= $post_data["DSC"];
		$block	= $post_data["Block"];

		generate_post_profile($title, $desc, $block);
	}
}

?>
