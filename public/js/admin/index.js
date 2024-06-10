const sideMenu = document.querySelector("aside");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");

menuBtn.addEventListener("click", () => {
  sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sideMenu.style.display = "none";
});

function convertToSlug(Text) {
  return Text.toLowerCase()
    .replace(/ /g, "-")
    .replace(/[^\w-]+/g, "");
}

function nameToSlug(input, target) {
  target = document.getElementById(target);
  if (target) {
    target.value = convertToSlug(input.value);
  }
}

function toast(text) {
  var myToast = Toastify({
    text: text,
    duration: 5000,
    close: true,
    gravity: "bottom",
  });

  myToast.showToast();
}

function getStatus(input, url) {
  xhttp = new XMLHttpRequest();
  const status = input.value;
  let body = "";
  body += "status=" + encodeURIComponent(status);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      let tbody = document.getElementById("tbody-order");
      tbody.innerHTML = this.responseText;
    }
  };

  xhttp.open("POST", url, false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(body);
}
