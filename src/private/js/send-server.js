function prepReq(dataToSend) {
	let reqMsg = "";

	for(let i = 0; i < dataToSend.length; i++) {
		// foo=a&bar=b
		reqMsg += dataToSend[i].getAttribute("name")+'='+dataToSend[i].value+'&';
	}

	return reqMsg;
}

export function sendReq(userData, fileToProcess, method = "GET") {
	const req = prepReq(userData);
	const xhr = new XMLHttpRequest();

	xhr.open(method, fileToProcess, true);
	xhr.setRequestHeader("Content-Type", "application/www-url-form-urlencoded");

	xhr.onload = () => {
		console.log(xhr.response);
		/*if(!xhr.responseURL) {
			console.log(xhr.responseText);
		} else {
			window.location.href = xhr.responseURL;
		}*/
	};

	xhr.send(req);
}
