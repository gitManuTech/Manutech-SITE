/** * @typedef {HTMLElement[]} PageElements **/

/**
 * @function getRawStudentData
 * @returns {PageElements} Will return raw HTML form elements
 **/
export function getRawStudentData() {
	const studentName	= document.getElementById("student-name");
	const studentClass	= document.getElementById("student-ra");
	const studentCourse	= document.getElementById("student-course");

	return [ studentName, studentClass, studentCourse ];
}

/**
 * @function getRawStudentData
 * @param	{PageElements} rawData	-	Raw form fields
 * @returns	{string[]}			Will return raw HTML form elements
 **/
export function getStudentData(rawData) {
	const studentData = [];

	for(let i = 0; i < rawData.length; i++) {
		studentData.push(rawData[i].value);
	}

	return studentData;
}

export function storeLocally(rawData, studentData) {
	for(let i = 0; i < studentData.length; i++) {
		localStorage.setItem(rawData[i].getAttribute("name"), studentData[i]);
	}
}


