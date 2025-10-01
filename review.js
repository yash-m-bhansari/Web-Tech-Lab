document.getElementById("ratingSubmit").addEventListener("click", () => {
	window.location.href = "index.html";
});

document.getElementById("rangeRating").oninput = function() {
  document.getElementById("rated").innerHTML = this.value;
}