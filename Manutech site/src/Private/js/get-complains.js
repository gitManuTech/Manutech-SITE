function trimComplains(complains) {
	const trimedComplains = []

	for(let i = 0; i < complains.length; i++) {
		trimedComplains.push(complains[i].trim());
	}

	return trimedComplains;
}

function extractComplains(rawComplains) {
	const complains = [];

	for(let i = 0; i < rawComplains.length; i++) {
		complains.push(rawComplains[i].value);
	}

	return complains;
}

export function getComplains() {
	const rawComplain	= document.querySelectorAll("[data-problem]");
	const complains		= extractComplains(rawComplain);
	const trimedComplains	= trimComplains(complains);

	return trimedComplains;
}
