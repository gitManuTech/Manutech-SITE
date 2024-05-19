/**
 * Calculates the minimal length of a field to be accepted
 * @function	calcMinFieldLen
 * @version	1.0.0
 * @param	{number} maxLen
 * @param	{number} percentage
 * @returns	{number} The minimal field length accepted
 * */
export function calcMinFieldLen(maxLen, percentage) {
	return parseInt(maxLen * (percentage / 100));
}


