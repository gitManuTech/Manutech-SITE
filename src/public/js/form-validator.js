import { isFieldOverLimit } from "../../private/js/chk-student-data.js";

document.getElementById("student-name").addEventListener("keyup", isStudentNameValid);
document.getElementById("student-classroom").addEventListener("keyup", isStudentRoomValid);
document.getElementById("student-course").addEventListener("keyup", isStudentCourseValid);

function checkRoomFormat(studentRoom) {
	const regex = /\d{1,1}[A-Z]{1,1}/;

	return regex.test(studentClass);
}

function isStudentRoomValid() {
	const fieldLimit	= 2;
	const studentClassroom	= document.getElementById("student-classroom");

	// TODO: refactor
	if(isFieldOverLimit(studentClassroom.value, fieldLimit) && checkRoomFormat(studentClassroom.value)) {
		console.log("classroom is valid");
	}
}

function isStudentNameValid() {
	const fieldLimit	= 32;
	const studentName	= document.getElementById("student-name");

	if(isFieldOverLimit(studentName.value.length, fieldLimit)) {
		console.log("over Limit!");
	}
}

function isStudentCourseValid() {
	const fieldLimit	= 38;
	const studentCourse	= document.getElementById("student-course");

	if(isFieldOverLimit(studentCourse.value.length, fieldLimit) {
		console.log("over limit");
	}
}
