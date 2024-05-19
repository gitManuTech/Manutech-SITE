import { enableOrDisableBtn } from "../../private/js/chk-student-data.js";
import { calcMinFieldLen } from "../../private/math.js";

document.getElementById("problem-title").addEventListener("keydown", verifyTitleLength);
document.getElementById("problem-description").addEventListener("keydown", verifyPostLen);
document.getElementById("problem-block").addEventListener("keydown", verifyBlockTyped);

(function() {
	document.getElementById("problem-title").focus();;
})

function isBlockValid(blockTyped) {
	const re = /B{1,1}\d{1,1}/gi

	return ((blockTyped.match(re)) ? true : false);
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
	const titleArea		= document.getElementById("problem-title");
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
