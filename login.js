document.getElementById("submit").addEventListener("click", () => {
	localStorage.setItem("isLoggedIn", "true");
	window.location.href = "index.html";
});