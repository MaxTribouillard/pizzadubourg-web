const toTop = document.querySelector(".btn");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 80) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})
