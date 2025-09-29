for (let i = 1; i <= 10; ++i) {
	document.getElementById("table").innerHTML += `		
	<tr>
		<td>_</td>
		<td>x</td>
		<td>${i}</td>
		<td>=</td>
		<td>_</td>
	</tr>`;
}

document.getElementById("mkTableBtn").onclick = function () {
	let n = document.getElementById("tableNum").value;
	document.getElementById("table").innerHTML = ``;
	for (let i = 1; i <= 10; ++i) {
		document.getElementById("table").innerHTML += `		
		<tr>
			<td>${n}</td>
			<td>x</td>
			<td>${i}</td>
			<td>=</td>
			<td>${n*i}</td>
		</tr>`;
	}
};

document.getElementById("toPort").addEventListener("click", () => {
	window.location.href = "index.html";
});