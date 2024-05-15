<?php

require_once "db-student-queries.php";

session_start();


$problem_title 	= $_POST["problem-title"];
$problem_block 	= $_POST["problem-block"];
$problem_desc	= $_POST["problem-descriptor"];

// it is not a "uid", but the idea is the same
$uid		= $_SESSION["uid"];

send_problem_data($problem_title, $problem_block, $problem_desc, $uid);

header("Location: student-post.php?ptitle=".$problem_title."&pblock=".$problem_block."&pdesc=".$problem_desc);

?>
