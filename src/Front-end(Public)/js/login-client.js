import { getRawStudentData, getStudentData } from "../../private/js/student-data.js"
import { isNameValid, isClassroomValid, isCourseValid } from "./form-validation.js";
import { SUBMIT_ERROR } from "../../private/js/enums.js"

document.getElementById("student-form").addEventListener("submit", mkLoginCheck, true);

function checkStudentData(name, classroom, course) {
	if(isNameValid(name)) {
		window.alert("Nome digitado acima do limite");
		return SUBMIT_ERROR.PROBLEM_FORMAT;
	}

	if(!isClassroomValid(classroom)) {
		window.alert("Sala inválida");
		return SUBMIT_ERROR.PROBLEM_FORMAT;
	}

	if(isCourseValid(course)) {
		window.alert("Curso digitado acima do limite");
		return SUBMIT_ERROR.PROBLEM_FORMAT;
	}

	return true;
}

function mkLoginCheck(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	const name	= studentData[0];
	const room	= studentData[1];
	const course	= studentData[2];

	// TODO: refactor
	if(checkStudentData(name, room, course) === SUBMIT_ERROR.PROBLEM_FORMAT) {
		e.preventDefault();
	}
}
