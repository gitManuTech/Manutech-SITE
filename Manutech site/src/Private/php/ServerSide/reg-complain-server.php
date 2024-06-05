<?php

require_once "../Database/db-student-queries.php";
require_once "../Links/gen-links.php";

session_start();

$prob_title = $_POST["problem-title"];
$prob_block = $_POST["problem-block"];
$prob_descr = $_POST["problem-descriptor"];

// it is not a "uid", but the idea is the same
$uid = $_SESSION["uid"];

send_problem_data($prob_title, $prob_block, $prob_descr, $uid);

header("Location: ".gen_post_link($prob_title, $prob_block, $prob_descr));

?>
