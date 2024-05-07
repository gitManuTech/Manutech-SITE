import { SUBMIT_ERROR } from "../../private/js/enums.js";

function showServerMsg(msg) {
	console.log(msg);
}

function checkForBadReq(respStat, respTxt) {
	if(respStat >= 400) {
		showServerMsg(respTxt);
		return true;
	}

	return false;
}

function genServerInfo(data) {
	const headers	= {
		"Content-Type": "application/json"
	};

	const reqParam = {
		method: "POST",
		headers,
		body: data
	};

	return reqParam;
}

// Async/await no JavaScript: o que é e quando usar a programação assíncrona?:
// https://www.alura.com.br/artigos/async-await-no-javascript-o-que-e-e-quando-usar
export async function mkReq(data, serverUrl, userWillLogin) {
	const serverInformation = genServerInfo(data);

	const resp		= await fetch(serverUrl, serverInformation);
	const serverRespCode	= await resp.statusCode;
	const serverText	= await resp.text();

	if(!userWillLogin) {
		showServerMsg(serverText);
	}

	if(userWillLogin) {
		window.location = resp.url;
	}
}

// https://coderwall.com/p/m-rmpq/dynamically-creating-properties-on-objects-using-javascript
export function createReq(userInfoHtml, userInfo, fieldsToAdd) {
	const userData	= {};

	for(let i = 0; i < fieldsToAdd; i++) {
		const fieldName = userInfoHtml[i].getAttribute("name");

		userData[fieldName] = userInfo[i];
	}

	const jsonRequest = JSON.stringify(userData)

	return ((jsonRequest == undefined) ? SUBMIT_ERROR.PROBLEM_JSON : jsonRequest);
}
