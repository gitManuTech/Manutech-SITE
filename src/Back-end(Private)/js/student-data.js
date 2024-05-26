export function getRawStudentData() {
	const studentName	= document.getElementById("student-name");
	const studentClass	= document.getElementById("student-classroom");
	const studentCourse	= document.getElementById("student-course");

	return [ studentName, studentClass, studentCourse ];
}

export function getStudentData(rawData) {
	const studentData = [];

	for(let i = 0; i < rawData.length; i++) {
		studentData.push(rawData[i].value);
	}

	return studentData;
}
