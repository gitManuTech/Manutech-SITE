<?php

require_once "db-connect.php";

function gen_student_page_post(string $title, string $desc, string $block): void {

echo <<<END

<div class="post-header-container">

	<h2 class="post-header">
		<a href="student-post.php?ptitle={$title}&pblock={$block}&pdesc={$desc}">{$title}</a>
	</h2>

</div>

<div class="post-desc">

	<p class="post-text">{$desc}</p>

</div>

END;

}

function select_posts(int $uid): mysqli_result {
	$mysql = connect_db();
	$posts = "SELECT
		problem_title Title, problem_desc DSC, problem_block Block
		FROM problem_tbl WHERE problem_tbl.student_id =".intval($uid)." LIMIT 10";

	$result = $mysql->query($posts);

	$mysql->close();

	$mysql = NULL;

	return $result;
}

function display_posts(int $uid): void {
	$posts = select_posts($uid);

	while($post_data = $posts->fetch_assoc()) {
		gen_student_page_post($post_data["Title"], $post_data["DSC"], $post_data["Block"]);
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
