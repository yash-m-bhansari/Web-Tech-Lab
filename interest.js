function calcInt() {
	let p = document.getElementById("p").value;
	let r = document.getElementById("r").value;
	let t = document.getElementById("t").value;
	document.getElementById("intAmt").innerHTML = (p*r*t)/100.0;
}

document.getElementById("p").onchange = calcInt;
document.getElementById("r").onchange = calcInt;
document.getElementById("t").onchange = calcInt;

document.getElementById("toPort").addEventListener("click", () => {
	window.location.href = "index.html";
});	