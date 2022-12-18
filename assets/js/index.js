let input = document.getElementById("q");

function fetch_search() {
  let search = input.value;
  let url = `fetch_search.php?search=${search}`;
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("output").innerHTML = data;
    });
}

document.getElementById("q").addEventListener("keyup", function () {
  if (input.value.length > 0) {
    fetch_search();
  } else {
    document.getElementById("output").innerHTML = "";
  }
});
