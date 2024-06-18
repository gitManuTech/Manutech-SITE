<?php

require_once "../Database/db-data-format.php";
require_once "../Database/db-student-queries.php";

/**
 * This function will select every post and then generate a
 * post card in the home page
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version 	1.0.0				Will select and make a post in home page
 * @since	2.0.0
 * */
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


/**
 * This function will select every post made by a student and
 * display at his profile in a post card
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version 	1.0.0				Will select and make a post in home page
 * @since	2.0.0
 *
 * @param int $uid The student id in the DB needed to make a JOIN
 * */
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
