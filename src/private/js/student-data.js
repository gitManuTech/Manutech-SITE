export function getStudentData() {
	const studentName	= document.getElementById("student-name");
	const studentClass	= document.getElementById("student-classroom");
	const studentCourse	= document.getElementById("student-course");

	return [ studentName, studentClass, studentCourse ];
}
