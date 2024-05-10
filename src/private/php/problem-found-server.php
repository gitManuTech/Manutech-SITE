<?php

require "./db-connect.php";

session_start();

function send_problem_data(string $ptitle, string $pblock, string $pdesc, int $uid): void {
	$mysql = connect_db();
	$complain = "INSERT INTO problem_tbl(
				problem_title, problem_block, problem_desc, student_id
			)
			VALUES(
				\"".$ptitle."\",
				\"".$pblock."\",
				\"".$pdesc."\",
				\"".$uid."\"
			)";

	$mysql->query($complain);
	$mysql->close();
}

$problem_title 	= $_POST["problem-title"];
$problem_block 	= $_POST["problem-block"];
$problem_desc	= $_POST["problem-descriptor"];

// it is not a "uid", but the idea is the same
$uid		= $_SESSION["uid"];

send_problem_data($problem_title, $problem_block, $problem_desc, $uid);

header("Location: student-post.php?ptitle=".$problem_title."&pblock=".$problem_block."&pdesc=".$problem_desc);

?>
