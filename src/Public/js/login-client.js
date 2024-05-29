import { getRawStudentData, getStudentData, storeLocally }
	from "../../Private/js/student-data.js"
import { isNameValid, isClassroomValid, isCourseValid }
	from "./form-validation.js";
import { SUBMIT_ERROR, SUBMIT_OK } from "../../Private/js/enums.js"

document.getElementById("student-form").addEventListener("submit", mkLoginCheck, true);

function isRaValid(ra) {
	console.log("TODO!");
}

function checkStudentData(name, ra, course) {
	let data_status = SUBMIT_OK.FIELDS_OK;

	if(isNameValid(name)) {
		window.alert("Nome digitado acima do limite");
		data_status = SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	/*if(!isClassroomValid(classroom)) {
		window.alert("Sala inválida");
		return SUBMIT_ERROR.PROBLEM_FORMAT;
	}*/

	if(isRaValid(ra)) {
		window.alert("RA digitado incorreto");
		data_status = SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	if(isCourseValid(course)) {
		window.alert("Curso digitado acima do limite");
		data_status = SUBMIT_ERROR.PROBLEM_FIELDS;
	}

	return data_status;
}

function mkLoginCheck(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	const name	= studentData[0];
	const ra	= studentData[1];
	const course	= studentData[2];

	/*if(checkStudentData(name, room, course) === SUBMIT_ERROR.PROBLEM_FORMAT) {
		e.preventDefault();
	}*/

	storeLocally(rawStudentData, studentData);
}
