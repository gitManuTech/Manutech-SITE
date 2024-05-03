function prepReq(dataToSend) {
	const formData = new FormData();

	for(let i = 0; i < dataToSend.length; i++) {
		formData.append(dataToSend[i].getAttribute("name"), dataToSend[i].value);
	}

	return formData;
}

export function sendReq(userData, fileToProcess, method = "GET") {
	const req = prepReq(userData);
	const xhr = new XMLHttpRequest();

	xhr.open(method, fileToProcess, true);

	xhr.onload = () => {

		if(!xhr.responseURL) {
			console.log(xhr.responseText);
		} else {
			window.location.href = xhr.responseURL;
		}

	};

	xhr.send(req);
}
