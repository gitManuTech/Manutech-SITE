<?php 

require_once "../Database/db-connect.php";
require_once "../Database/db-student-queries.php";

session_start();

$student_ra = $_SESSION["sra"];
$new_course = $_POST["new-course"];

update_course($new_course, $student_ra);

$_SESSION["scourse"] = $new_course;

?>
