import { getRawStudentData, getStudentData } from "../../private/js/student-data.js"
import { createReq, mkReq } from "../../private/js/send-server.js";
import { ELEMENTS_TO_SEND, SUBMIT_ERROR } from "../../private/js/enums.js";

document.getElementById("student-form").addEventListener("submit", mkLoginReq, true);

function mkLoginReq(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	const requestData = createReq(rawStudentData, studentData, ELEMENTS_TO_SEND.ALL);
	const requestPath = "../../private/php/login-server.php";

	// I don't know if this is the best way to do it
	if(requestData === SUBMIT_ERROR.PROBLEM_JSON) {
		console.log(requestData);
		console.log(studentData);
	} else {
		mkReq(requestData, requestPath, true);
	}

	e.preventDefault();
}
