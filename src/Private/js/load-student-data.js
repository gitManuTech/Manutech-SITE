function loadStudentInfo() {
	const infoPlaces = document.getElementsByClassName("student-info");

	infoPlaces[0].innerText = localStorage["student-name"];
	infoPlaces[1].innerText = localStorage["student-ra"];
	infoPlaces[2].innerText = localStorage["student-course"];
}
