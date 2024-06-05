function updateLocalStorge() {
	const currentCourse = document.getElementById("new-course");

	localStorage.setItem("student-course", currentCourse.value);
}

function prepareReq(data) {
	const formData = new FormData();

	formData.append(data.getAttribute("name"), data.value.trim());

	return formData;
}

function updateStudentCourse() {
	const newCourse = document.getElementById("new-course");
	const req	= prepareReq(newCourse);
	const xhr	= new XMLHttpRequest();

	xhr.open("POST", "../ServerSide/ch-cour-server.php", true);

	xhr.onload = function() {
		window.alert("Atualizando curso...");
		window.location.reload();

		updateStudentCourse();
	}

	xhr.send(req);

	return false;
}
