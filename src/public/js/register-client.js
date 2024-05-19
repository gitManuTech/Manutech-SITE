import { getRawStudentData, getStudentData } from "../../private/js/student-data.js"
import { createReq, mkReq } from "../../private/js/send-server.js";
import { ELEMENTS_TO_SEND, SUBMIT_ERROR } from "../../private/js/enums.js";

document.getElementById("student-form").addEventListener("submit", mkRegisterReq, true);

function mkRegisterReq(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	const requestData	= createReq(rawStudentData, studentData, ELEMENTS_TO_SEND.ALL);
	const requestPath	= "../../private/php/register-server.php";

	// I don't know if this is the best way to do it
	if(requestData === SUBMIT_ERROR.PROBLEM_FIELDS) {
		e.preventDefault();
	} else {
		mkReq(requestData, requestPath, true);
	}

	e.preventDefault();
}
