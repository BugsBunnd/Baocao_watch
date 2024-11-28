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

function showdemo() {
  alert("Hàm ShowAddSP đã được gọi!");
}

// Hàm để toggle display giữa block và none
function ShowAddSP() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_danhmuc_sp .add_sanpham"
  );

  window.scrollTo({
    top: 20, // Vị trí Y = 0 (đầu trang)
    behavior: "smooth", // Hiệu ứng cuộn mượt
  });
  // Kiểm tra nếu phần tử đang ẩn (max-height = 0)
  if (
    targetElement.style.maxHeight === "0px" ||
    targetElement.style.maxHeight === ""
  ) {
    targetElement.style.maxHeight = "588px"; // Thiết lập max-height để mở rộng phần tử
    targetElement.style.maxWidth = "70%"; // Thiết lập max-width để mở rộng đến 70%
  } else {
    targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
    targetElement.style.maxWidth = "0px"; // Thu nhỏ lại khi ẩn
  }
}

function ShowEditSP() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_danhmuc_sp .edit_sanpham"
  );

  window.scrollTo({
    top: 20, // Vị trí Y = 0 (đầu trang)
    behavior: "smooth", // Hiệu ứng cuộn mượt
  });

  // Kiểm tra nếu phần tử đang ẩn (max-height = 0)
  if (
    targetElement.style.maxHeight === "0px" ||
    targetElement.style.maxHeight === ""
  ) {
    targetElement.style.maxHeight = "588px"; // Thiết lập max-height để mở rộng phần tử
    targetElement.style.maxWidth = "70%"; // Thiết lập max-width để mở rộng đến 70%
  } // else {
  //   targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
  //   targetElement.style.maxWidth = "0px"; // Thu nhỏ lại khi ẩn
  // }
}

function Cancell_edit() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_danhmuc_sp .edit_sanpham"
  );

  window.scrollTo({
    top: 20, // Vị trí Y = 0 (đầu trang)
    behavior: "smooth", // Hiệu ứng cuộn mượt
  });

  // Kiểm tra nếu phần tử đang ẩn (max-height = 0)
  if (
    targetElement.style.maxHeight === "588px" &&
    targetElement.style.maxWidth === "70%"
  ) {
    targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
    targetElement.style.maxWidth = "0px"; // Thu nhỏ lại khi ẩn
  }
}
