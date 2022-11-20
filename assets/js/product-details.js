let btnAddToCart = document.getElementById("addToCart");

function addToCart() {
  let id = btnAddToCart.value;
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("outputCart").innerHTML = xhr.responseText;
    }
  };
  xhr.open("POST", "fetch_cart.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id=" + id);
}

btnAddToCart.addEventListener("click", function () {});
