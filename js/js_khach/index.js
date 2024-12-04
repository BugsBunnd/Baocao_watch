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

//Dịnh dạng 1.000.000 VNĐ cho tiền load từ csdl
document.addEventListener("DOMContentLoaded", function () {
  const prices = document.querySelectorAll(".price"); // Lấy tất cả các phần tử có class "price"

  prices.forEach((price) => {
    const number = parseInt(price.textContent); // Chuyển nội dung thành số nguyên
    if (!isNaN(number)) {
      price.textContent = number.toLocaleString("vi-VN") + " VNĐ"; // Định dạng theo kiểu Việt Nam
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const prices = document.querySelectorAll(".price_last"); // Lấy tất cả các phần tử có class "price"

  prices.forEach((price) => {
    const number = parseInt(price.textContent); // Chuyển nội dung thành số nguyên
    if (!isNaN(number)) {
      price.textContent = number.toLocaleString("vi-VN") + " VNĐ"; // Định dạng theo kiểu Việt Nam
    }
  });
});
