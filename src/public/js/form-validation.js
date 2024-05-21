function isFieldOverLimit(fieldLength, limit) {
	return (fieldLength > limit);
}

function checkClassFormat(classroom) {
	// will match, for example: "1Q", "7Z", "2B", "9S"
	const regex = /\d{1,1}[A-Z]{1,1}/;

	return regex.test(classroom);
}

function checkBlockFormat(studentBlock) {
	const regex = /\d{1,1}B{1,1}/;

	return regex.test(studentBlock);
}

export function isClassroomValid(classroom) {
	const fieldLimit = 2;

	return (!isFieldOverLimit(classroom.length, fieldLimit)
		&& checkClassFormat(classroom));
}

export function isBlockValid(block) {
	const fieldLimit = 2;

	return (isFieldOverLimit(block.length, fieldLimit)
		&& checkBlockFormat(block));
}

export function isNameValid(name) {
	const fieldLimit = 32;

	return (isFieldOverLimit(name.length, fieldLimit));
}

export function isCourseValid(course) {
	const fieldLimit = 38;

	return (isFieldOverLimit(course.length, fieldLimit));
}
