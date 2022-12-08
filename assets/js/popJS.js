function openPop(text) {
  alert("MASUK");
  document.getElementById("popup").style.display = "initial";
  document.getElementById("bg-pop").style.display = "initial";
  document.getElementsById("tulisanSenyum").innerHTML = "";
}

function closePop() {
  document.getElementById("popup").style.display = "none";
  document.getElementById("bg-pop").style.display = "none";
}
