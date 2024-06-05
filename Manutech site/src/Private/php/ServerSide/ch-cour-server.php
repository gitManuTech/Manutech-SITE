<?php 

include("Database/db-connect.php");

// TODO: Change mysqli to prepare
// TODO: Create function to alter the student course

$mysql = connect_db();

// To update a course I would need... what...?
// 1 - I would need to alter the student_tbl
// 2 - Update the record where the current course is
// 2.2 - But to get the student course I would need something else from the student
// 2.3 - I could use the student RA

$course_to_alter = $_POST["change-course"];

?>
