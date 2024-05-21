export function isTitleOverLimit(titleLength) {
	const titleMaxLength = 32;

	return (titleLength > titleMaxLength);
}

export function isBlockTypedValid(block) {
	const correctBlockFormat = /B{1,1}\d{1,1}/g;

	return correctBlockFormat.test(block);
}

export function isPostOverLimit(postLength) {
	// We might need to resize it later...
	const postMaxLen = 255;

	return (postLength > postMaxLen);
}
