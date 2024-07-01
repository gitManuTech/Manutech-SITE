<?php namespace Enums\UserAccStat;

enum StudentAcc: int {
	case DISABLED = 0;
	case ENABLED = 1;
}

enum StudentStat: int {
	case HAS_NO_REG = 0;
	case HAS_REG = 1;
}

?>
