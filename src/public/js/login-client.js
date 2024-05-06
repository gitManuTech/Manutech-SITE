export { getStudentData } from "../../private/js/student-data.js";
import { sendReq } from "../../private/js/send-server.js";

document.getElementById("student-form").addEventListener("submit", mkLoginReq, true);

function mkLoginReq(e) {
	const studentData = getStudentData();

	sendReq(studentData, "../../private/php/login-server.php", "POST");

	e.preventDefault();
}
