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

// code show bảng add sp
// Hàm để toggle display giữa block và none
function ShowAddSP() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_sp .container_addsp"
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
    targetElement.style.maxHeight = "800px"; // Thiết lập max-height để mở rộng phần tử
    targetElement.style.maxWidth = "95%"; // Thiết lập max-width để mở rộng đến 70%
  } else {
    targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
    targetElement.style.maxWidth = "0px"; // Thu nhỏ lại khi ẩn
  }
}

function ShowEditSP() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_sp .container_editsp"
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
    targetElement.style.maxHeight = "800px"; // Thiết lập max-height để mở rộng phần tử
    targetElement.style.maxWidth = "95%"; // Thiết lập max-width để mở rộng đến 70%
  }
}

function Cancell_edit() {
  // Lấy phần tử cần thay đổi display
  const targetElement = document.querySelector(
    ".container_sp .container_editsp"
  );

  // Kiểm tra nếu form đang mở
  const computedStyle = window.getComputedStyle(targetElement);
  const maxHeight = computedStyle.maxHeight; //lấy ra chiều cao của element đó

  if (maxHeight !== "0px" && maxHeight !== "none") {
    targetElement.style.maxHeight = "0px"; // Thu nhỏ lại khi ẩn
    targetElement.style.maxWidth = "0px"; // Thu nhỏ lại khi ẩn
  }
}
