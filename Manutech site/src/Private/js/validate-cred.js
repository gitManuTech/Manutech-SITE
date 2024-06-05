import { SUBMIT_ERROR, SUBMIT_OK } from "./field-validation.js"

function isRaValid(ra) {
	const validRaPattern = /\d{7,7}/;

	return validRaPattern.test(ra);
}

function isFieldEmpty(fieldLength) {
	return (fieldLength === 0);
}

function isFieldOverLimit(fieldLength, limit) {
	return (fieldLength > limit);
}

// TODO: create function called "checkForBadChars(fieldContent)"
// this function will return true when it finds any
// "*", "'", """, "\" and "/" characters

export function validateData(name, ra, course) {
	if(isFieldEmpty(name.length) || isFieldOverLimit(name.length, 32)) {
		window.alert("Campo nome: Verifique o nome digitado!");
		return SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	if(isFieldEmpty(ra.length) || isFieldOverLimit(ra.length, 7) || !isRaValid(ra)) {
		window.alert("Campo RA: verifique o RA digitado!");
		return SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	if(isFieldEmpty(course.length) || isFieldOverLimit(course.length, 38)) {
		window.alert("Campo curso: verifique o curso digitado!");
		return SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	return SUBMIT_OK.FIELDS_OK;
}
