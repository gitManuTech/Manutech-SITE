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

	if(newCourse.value.length === 0) {
		window.alert("Campo não foi preenchido")
		newCourse.focus();
		return false;
	}

	xhr.onload = function() {
		window.alert("Atualizando curso...");
		localStorage.setItem("student-course", newCourse.value.trim());
		window.location.reload();
	}

	xhr.send(req);

	return false;
}
