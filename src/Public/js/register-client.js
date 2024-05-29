import { getRawStudentData, getStudentData, storeLocally }
	from "../../Back-end(Private)/js/student-data.js";

document.getElementById("student-form").addEventListener("submit", mkRegisterReq, true);

function mkRegisterReq(e) {
	const rawStudentData	= getRawStudentData();
	const studentData	= getStudentData(rawStudentData);

	storeLocally(rawStudentData, studentData);
}
