// Hiển thị nội dung mặc định chi tiết sản phẩm khi tải trang
window.onload = () => {
  selectButton("btn-product-details", "content-product-details");
};

//Get chi tiết sản phẩm -  Bảo hành - Hướng dẫn chọn size
function selectButton(buttonId, contentId) {
  var buttons = document.querySelectorAll(".btn-option");
  var contents = document.querySelectorAll(".collapse_chitiet .content");

  buttons.forEach(function (button) {
    button.classList.remove("active");
  });
  contents.forEach(function (content) {
    content.classList.remove("active");
  });

  document.getElementById(buttonId).classList.add("active");
  document.getElementById(contentId).classList.add("active");

  var collapseContent = document.getElementById(contentId);
  collapseContent.style.height = "auto"; // Đảm bảo chiều cao tự động khi mở
}

// cuộn của nút chi tiết
document
  .getElementById("btn-product-details")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 750, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });

// cuộn nút chính sách bảo hành
document
  .getElementById("btn-warranty-policy")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 750, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });
// cuộn nút hướng đẫn chọn size
document
  .getElementById("btn-size-guide")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 750, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });
