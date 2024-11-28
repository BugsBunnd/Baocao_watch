// animation search navbar
const search = document.getElementById("search_cls");
const btn = document.getElementById("btn_search");
const input = document.getElementById("search_text");

btn.addEventListener("click", () => {
  search.classList.toggle("acctive");
  input.focus();
});

// backToTop
// Hiện nút cuộn nếu croll qua 200px
window.onscroll = function () {
  const button = document.getElementById("backToTop");
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
};

// Cuộn về 0px
document.getElementById("backToTop").onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};
//end backToTop
