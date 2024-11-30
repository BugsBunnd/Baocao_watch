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
    targetElement.style.maxHeight = "820px"; // Thiết lập max-height để mở rộng phần tử
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
    targetElement.style.maxHeight = "820px"; // Thiết lập max-height để mở rộng phần tử
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

// Hàm tính toán và hiển thị tỉ lệ giảm giá =====================================
function tinhTiLe() {
  var lastPrice = parseFloat(document.getElementById("last_price").value);
  var giaBan = parseFloat(document.getElementById("giaban").value);
  var tileInput = document.getElementById("tile");

  // Nếu một trong hai giá trị chưa được nhập, không làm gì
  if (isNaN(lastPrice) || isNaN(giaBan)) {
    tileInput.value = "";
    return;
  }

  // Kiểm tra tính hợp lệ
  if (lastPrice <= 0 || giaBan <= 0 || giaBan > lastPrice) {
    tileInput.value = 0; // Điền 0 nếu giá trị không hợp lệ hoặc giá bán lớn hơn giá gốc
    return;
  }

  // Tính tỉ lệ giảm giá (làm tròn đến số nguyên)
  var tileGiamGia = Math.floor(((lastPrice - giaBan) / lastPrice) * 100);

  // Hiển thị kết quả
  tileInput.value = tileGiamGia;
}

// Gắn sự kiện cho cả hai ô nhập liệu để lắng nghe nhập tính giảm giá
document.getElementById("last_price").addEventListener("input", tinhTiLe);
document.getElementById("giaban").addEventListener("input", tinhTiLe);
// =============================================================================

function ktform_add_sp() {
  var name = document.getElementById("name");
  if (name.value == "") {
    alert("Vui lòng nhập tên sản phẩm !!!");
    name.focus();
    return false;
  }

  var last_price = document.getElementById("last_price");
  var price_value = parseInt(last_price.value, 10); // Chuyển value thành số nguyên
  if (isNaN(price_value) || price_value <= 0) {
    alert("Vui lòng nhập giá sản phẩm là số nguyên dương");
    last_price.focus();
    return false;
  }

  var giaban = document.getElementById("giaban");
  var giabanValue = parseInt(giaban.value, 10); // Chuyển giá trị sang số nguyên
  if (isNaN(giabanValue) || giabanValue <= 0) {
    alert("Vui lòng nhập giá bán sản phẩm là số nguyên dương");
    giaban.focus();
    return false;
  }

  var danhMucCha = document.getElementById("danhmucsp");
  if (danhMucCha.value === "") {
    alert("Vui lòng chọn một danh mục cha!");
    danhMucCha.focus();
    return false;
  }

  var fileInput = document.getElementById("file_anhsp");

  // Kiểm tra xem đã chọn file hay chưa
  if (fileInput.files.length === 0) {
    alert("Vui lòng chọn ảnh sản phẩm!");
    fileInput.focus();
    return false;
  }

  var chitiet_anhsp = document.getElementById("chitiet_anhsp");

  // // Kiểm tra xem đã chọn file hay chưa
  // if (chitiet_anhsp.files.length === 0) {
  //   alert("Vui lòng chọn ảnh chi tiết sản phẩm!");
  //   chitiet_anhsp.focus();
  //   return false;
  // }

  return true;
}

function ktform_sua_sp() {
  var name_sua = document.getElementById("name_sua");
  if (name_sua.value == "") {
    alert("Vui lòng nhập tên sản phẩm !!!");
    name_sua.focus();
    return false;
  }

  var last_price_sua = document.getElementById("last_price_sua");
  var price_value = parseInt(last_price_sua.value, 10); // Chuyển value thành số nguyên
  if (isNaN(price_value) || price_value <= 0) {
    alert("Vui lòng nhập giá sản phẩm là số nguyên dương");
    last_price_sua.focus();
    return false;
  }

  var giaban_sua = document.getElementById("giaban_sua");
  var giabanValue = parseInt(giaban_sua.value, 10); // Chuyển giá trị sang số nguyên
  if (isNaN(giabanValue) || giabanValue <= 0) {
    alert("Vui lòng nhập giá bán sản phẩm là số nguyên dương");
    giaban_sua.focus();
    return false;
  }

  var danhMucCha = document.getElementById("danhmucsp_sua");
  if (danhMucCha.value === "") {
    alert("Vui lòng chọn một danh mục cha!");
    danhMucCha.focus();
    return false;
  }

  var fileInput = document.getElementById("file_anhsp_sua");

  // Kiểm tra xem đã chọn file hay chưa
  if (fileInput.files.length === 0) {
    alert("Vui lòng chọn ảnh sản phẩm!");
    fileInput.focus();
    return false;
  }

  // var chitiet_anhsp = document.getElementById("chitiet_anhsp_sua");

  // // Kiểm tra xem đã chọn file hay chưa
  // if (chitiet_anhsp.files.length === 0) {
  //   alert("Vui lòng chọn ảnh chi tiết sản phẩm!");
  //   chitiet_anhsp.focus();
  //   return false;
  // }

  return true;
}

function tinhTiLe_sua() {
  var lastPrice = parseFloat(document.getElementById("last_price_sua").value);
  var giaBan = parseFloat(document.getElementById("giaban_sua").value);
  var tileInput = document.getElementById("tile_sua");

  // Nếu một trong hai giá trị chưa được nhập, không làm gì
  if (isNaN(lastPrice) || isNaN(giaBan)) {
    tileInput.value = "";
    return;
  }

  // Kiểm tra tính hợp lệ
  if (lastPrice <= 0 || giaBan <= 0 || giaBan > lastPrice) {
    tileInput.value = 0; // Điền 0 nếu giá trị không hợp lệ hoặc giá bán lớn hơn giá gốc
    return;
  }

  // Tính tỉ lệ giảm giá (làm tròn đến số nguyên)
  var tileGiamGia = Math.floor(((lastPrice - giaBan) / lastPrice) * 100);

  // Hiển thị kết quả
  tileInput.value = tileGiamGia;
}

// Gắn sự kiện cho cả hai ô nhập liệu để lắng nghe nhập tính giảm giá
document
  .getElementById("last_price_sua")
  .addEventListener("input", tinhTiLe_sua);
document.getElementById("giaban_sua").addEventListener("input", tinhTiLe_sua);
// =============================================================================
