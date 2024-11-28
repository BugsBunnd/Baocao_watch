// Hiển thị nội dung mặc định chi tiết sản phẩm khi tải trang
window.onload = () => {
  selectButton("btn-product-details", "content-product-details");
};

//Get chi tiết sản phẩm -  Bảo hành - Hướng dẫn chọn size
function selectButton(buttonId, contentId) {
  // Ẩn tất cả các nội dung
  const contents = document.querySelectorAll(".content");
  contents.forEach((content) => content.classList.remove("active"));

  // Hiển thị nội dung được chọn
  document.getElementById(contentId).classList.add("active");

  // Đảm bảo khung collapse luôn hiển thị
  const collapseElement = document.getElementById("sharedCollapse");
  const bsCollapse = new bootstrap.Collapse(collapseElement, {
    toggle: false,
  });
  bsCollapse.show();

  // Loại bỏ lớp 'active' khỏi tất cả các nút
  const buttons = document.querySelectorAll(".btn-option");
  buttons.forEach((btn) => btn.classList.remove("active"));

  // Thêm lớp 'active' vào nút được chọn
  document.getElementById(buttonId).classList.add("active");
}

// cuộn của nút chi tiết
document
  .getElementById("btn-product-details")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 650, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });

// cuộn nút chính sách bảo hành
document
  .getElementById("btn-warranty-policy")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 650, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });
// cuộn nút hướng đẫn chọn size
document
  .getElementById("btn-size-guide")
  .addEventListener("click", function () {
    // Cuộn mượt mà xuống cách đầu trang 200px
    window.scrollTo({
      top: 650, // Cuộn tới vị trí 200px từ trên xuống
      behavior: "smooth", // Cuộn mượt mà
    });
  });
