// BAR

function showSidebar() {
  let sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "flex";
}
function hideside() {
  let sidebar = document.querySelector(".sidebar");
  sidebar.style.display = "none";
}

// ONLINE COURSE LIGHT
let landing = document.querySelector("#landing");
let landingInteval = setInterval(() => {
  let color1 = landing.style.color;
  if (color1 == "bisque") {
    landing.style.color = "white";
  } else {
    landing.style.color = "bisque";
  }
}, 1000);

let contactBtn = document.getElementById("contact-btn");

contactBtn.addEventListener("click", function () {
  window.location.href = "contact.html";
});

let contactBtn2 = document.getElementById("contact-btn2");

contactBtn2.addEventListener("click", function () {
  window.location.href = "contact.html";
});
