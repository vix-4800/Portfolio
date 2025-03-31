function countYears(startYear) {
	const date = new Date();
	const currentYear = date.getFullYear();

	return currentYear - startYear;
}

document.addEventListener("DOMContentLoaded", () => {
	document.getElementById("age").textContent =
		countYears(2001) + " years old";
});
