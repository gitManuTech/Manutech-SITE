<?php namespace Database\Enums;

// This ENUM should be treated as just number, since:
// we are checking against the rows that are found in the DB
enum STUDENT_ACC: int {
	case DISABLED = 0;
	case ENABLED = 1;
}

enum STUDENT_STAT: int {
	case HAS_NO_REG = 0;
	case HAS_REG = 1;
}

?>
