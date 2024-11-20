// Code của table

$(document).ready(function () {
  $("#table_sp").DataTable({
    pageLength: 10, // Số dòng tối đa mỗi trang
    lengthMenu: [5, 10, 25, 50, 100], // Tùy chọn hiển thị số dòng
    language: {
      info: "Showing _START_ to _END_ of _TOTAL_  Results",
      paginate: {
        first: "Trang đầu",
        last: "Trang cuối",
        next: ">",
        previous: "<",
      },
      lengthMenu: "Hiển thị _MENU_ dòng",
    },
  });
});

// Hàm để toggle display giữa block và none
function ShowAddSP() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_sanpham .add_sanpham"
  );

  // Kiểm tra nếu phần tử đang ẩn (max-height = 0)
  if (
    targetElement.style.maxHeight === "0px" ||
    targetElement.style.maxHeight === ""
  ) {
    targetElement.style.maxHeight = "588px"; // Thiết lập max-height để mở rộng phần tử
  } else {
    targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
  }
}
