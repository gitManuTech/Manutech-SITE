import { getRawStudentData, getStudentData, storeLocally }
	from "../../Private/js/student-data.js";

import { validateData } from "../../Private/js/validate-cred.js"

import { SUBMIT_ERROR } from "../../Private/js/field-validation.js"

document.getElementById("student-form").addEventListener("submit", mkRegisterReq, true);

function mkRegisterReq(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	const name	= studentData[0];
	const ra	= studentData[1];
	const course	= studentData[2];

	if(validateData(name, ra, course) === SUBMIT_ERROR.PROBLEM_FIELDS) {
		window.alert("Ocorreu algum problema: verifique os campos digitados.");
		e.preventDefault();
	} else {
		storeLocally(rawStudentData, studentData);
	}
}
