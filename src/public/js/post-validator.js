document.getElementById("problem-title").addEventListener("keydown", verifyTitleLength);
document.getElementById("problem-description").addEventListener("keydown", verifyPostLen);
document.getElementById("problem-block").addEventListener("keydown", verifyBlockTyped));

(function() {
	document.getElementById("problem-title").focus();;
})

function calcMinFieldLen(maxLen, percentage) {
	return parseInt(maxLen * (percentage / 100));
}

function isBlockValid(blockTyped) {
	// will search for "b" or "B" followed by any 1 digit number
	const re = /[bB]{1,1}\d{1,1}/gi

	return ((blockTyped.match(re)) ? true : false);
}

function enableOrDisableBtn(fieldLen, minLen, maxLen) {
	const submitBtn = document.getElementById("submit-btn");

	// TODO: make it better
	if(fieldLen >= minLen && fieldLen <= maxLen) {
		submitBtn.disabled = false;
	} else {
		submitBtn.disabled = true;
	}
}

function verifyBlockTyped() {
	const block		= document.getElementById("problem-block");
	const blockTyped	= block.value;

	// i'll bullshit here!
	if(!isBlockValid(blockTyped)) {
		enableOrDisableBtn(block.value.length, 1, 2);
	} else {
		enableOrDisableBtn(block.value.length, 2, 2);
	}
}

function verifyTitleLength() {
	const titleArea		= documenet.getElementById("problem-title");
	const titleLength	= titleArea.value.length;

	const titleMaxLen = 32;
	const titleMinLen = calcMinFieldLen(titleMaxLen, 50);

	enableOrDisableBtn(titleLength, titleMinLen, titleMaxLen);
}

function verifyPostLen() {
	const postArea	= document.getElementById("problem-description");
	const postLen	= postArea.value.length;

	// We might need to resize it later...
	const postMaxLen = 255;
	const postMinLen = calcMinFieldLen(postMaxLen, 15);

	enableOrDisableBtn(postLen, postMinLen, postMaxLen);
}
