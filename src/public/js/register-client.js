import { getStudentData } from "../../private/js/student-data.js"
import { sendReq } from "../../private/js/send-server.js";

document.getElementById("student-form").addEventListener("submit", mkRegisterReq, true);

function mkRegisterReq(e) {
	const studentData = getStudentData();

	sendReq(studentData, "../../private/php/register-server.php", "POST");

	e.preventDefault();
}
