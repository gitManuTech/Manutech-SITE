<?php 

require_once "../Database/db-connect.php";
require_once "../Database/db-student-queries.php";

// we'll need student's RA because it is unique, so we will need $_SESSION
// to obtain the user RA from the DB is unnecessary 'cause
// we are: connecting to the DB, making a query (get_credentials()),
// separating only the RA to use, making another query (to update now)

// with just $_SESSION, we are just: accessing an array and then making an query

session_start();

$student_ra = $_SESSION["sra"];
$new_course = trim($_POST["new-course"]);

update_course($new_course, $student_ra);

// after this, we'll need to update $_SESSION
$_SESSION["scourse"] = $new_course;

?>
