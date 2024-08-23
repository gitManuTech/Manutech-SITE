<?php

require_once "../Database/db-student-queries.php";
require_once "../Links/gen-links.php";

// it is not a "uid", but the idea is the same
$uid = $_POST["uid"];
$prob_title = trim($_POST["problem-title"]);
$prob_block = trim($_POST["problem-block"]);
$prob_descr = trim($_POST["problem-descriptor"]);
$prob_urgen = trim($_POST["urgency"]);

send_problem_data($prob_title, $prob_block, $prob_descr, $prob_urgen, $uid);

header("Location: ".gen_post_link($prob_title, $prob_block, $prob_descr));

?>
