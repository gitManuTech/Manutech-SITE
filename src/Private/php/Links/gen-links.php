<?php

function gen_post_link(string $title, string $block, string $desc): string {
	$post_dir	= "../Post/";
	$student_post	= "student-post.php?";
	$url_parameters = "ptitle=".$title."&pblock=".$block."&pdesc=".$desc;

	return $post_dir.$student_post.$url_parameters;
}

?>
