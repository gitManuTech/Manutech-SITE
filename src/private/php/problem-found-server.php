<?php

require "./db-connect.php";

$problem_title 	= $_POST["problem-title"];
$problem_block 	= $_POST["problem-block"];
$problem_desc	= $_POST["problem-descriptor"];

$mysql = connect_db();

$insert_complain = "INSERT INTO problems_tbl(problem_title, problem_block, problem_desc)
		VALUES(\"".$problem_title."\",\"".$problem_block.",\"".$problem_desc."\")";

?>
