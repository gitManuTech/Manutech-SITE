import { sendReq } from "../../private/js/send-server.js";

document.getElementById("student-form").addEventListener("submit", mkRegisterReq, true);

function getStudentData() {
	const studentName	= document.getElementById("student-name");
	const studentClass	= document.getElementById("student-classroom");
	const studentCourse	= document.getElementById("student-course");

	return [ studentName, studentClass, studentCourse ];
}

function mkRegisterReq(e) {
	const studentData = getStudentData();

	sendReq(studentData, "../../private/php/register-server.php", "POST");

	e.preventDefault();
}
