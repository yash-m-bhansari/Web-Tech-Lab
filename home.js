const authButtons = document.getElementById("auth-buttons");
const userButtons = document.getElementById("user-buttons");

function showUserButtons() {
	authButtons.style.display = "none";
	userButtons.style.display = "block";
}

function showAuthButtons() {
	authButtons.style.display = "block";
	userButtons.style.display = "none";
}

if (localStorage.getItem("isLoggedIn") === "true") {
	showUserButtons();
}

document.getElementById("loginBtn").addEventListener("click", () => {
	window.location.href = "login.html";
});

document.getElementById("registerBtn").addEventListener("click", () => {
	window.location.href = "register.html";
	localStorage.setItem("isLoggedIn", "true");
	showUserButtons();
});

document.getElementById("signOutBtn").addEventListener("click", () => {
	window.location.href = "session_logout.php";
	localStorage.removeItem("isLoggedIn");
	showAuthButtons();
});

document.getElementById("reviewBtn").addEventListener("click", () => {
	window.location.href = "review.html";
});

document.getElementById("tableBtn").addEventListener("click", () => {
	window.location.href = "table.html";
});

document.getElementById("interestBtn").addEventListener("click", () => {
	window.location.href = "interest.html";
});

document.getElementById("phpTableBtn").addEventListener("click", () => {
	window.location.href = "table.php";
});

document.getElementById("getCalc").addEventListener("click", () => {
	window.location.href = "getcalc.php";
});

document.getElementById("postCalc").addEventListener("click", () => {
	window.location.href = "postcalc.php";
});

document.getElementById("dbconn").addEventListener("click", () => {
	window.location.href = "dbconn.php";
});

document.getElementById("cookieReg").addEventListener("click", () => {
	window.location.href = "cookies_register.php";
	localStorage.setItem("isLoggedIn", "true");
	showUserButtons();
});

document.getElementById("sessionLog").addEventListener("click", () => {
	window.location.href = "session_login.php";
	localStorage.setItem("isLoggedIn", "true");
	showUserButtons();
});