setTinhTrangdh();
price_Total(); //show tổng giá đơn hàng
price_Save(); //show giá tiết kiệm được khi mua có giảm giá

//Edit đơn hàng

function toggleDetail() {
  const element = document.querySelector(
    ".container_donhang .container_chitietdh"
  );

  if (!element.classList.contains("open")) {
    // Mở rộng
    element.style.height = element.scrollHeight + "px"; // Thiết lập chiều cao thực tế
    element.style.maxWidth = "40%"; // Thiết lập chiều rộng
    element.classList.add("open");

    // Sau khi mở rộng xong, đặt chiều cao về auto để tránh lỗi dư
    setTimeout(() => {
      element.style.height = "auto";
    }, 500); // Phải đồng bộ với thời gian transition
  } else {
    // Thu nhỏ
    element.style.height = element.offsetHeight + "px"; // Gán chiều cao hiện tại trước khi thu nhỏ
    element.offsetHeight; // Buộc trình duyệt áp dụng thay đổi (reflow)
    element.style.height = "0"; // Thu nhỏ về 0
    element.style.maxWidth = "0";
    element.classList.remove("open");
  }
}

// ======================================== Thay đổi số lượng sản phẩm  và cập nhật giá =============================================
function changeValue(button, step) {
  // Tìm thẻ cha chứa nút bấm
  const parent = button.closest(".list_price");

  // Lấy input liên quan
  const input = parent.querySelector(".number-input input");
  let quantity = parseInt(input.value) || 1; // Giá trị hiện tại trong input

  // Giới hạn số lượng theo min và max
  const min = parseInt(input.min) || 1;
  const max = parseInt(input.max) || 100000000;
  new_quantity = Math.min(Math.max(quantity + step, min), max); // Đảm bảo số lượng nằm trong giới hạn

  input.value = new_quantity; //cập nhật giá trị số lượng sản phẩm

  // Lấy ra giá gốc của sản phẩm
  const price = parent.querySelector(".giagoc").textContent.replace(/\./g, "");
  const total_price = parseInt(price) * new_quantity;
  const fomat_total_price = total_price.toLocaleString("vi-VN"); // định dạng lại kiểu tiền 80.000.000

  //set lại giá trị tiền vào price
  parent.querySelector(
    ".price"
  ).innerHTML = `${fomat_total_price} <span>₫</span>`;

  price_Total();
  price_Save();
}

function price_Total() {
  //Tìm tất cả các thẻ cha có class "listproduct"
  const listProducts = document.querySelectorAll(".listproduct");

  let totalPrice = 0;

  // Lặp qua từng thẻ cha
  listProducts.forEach((product) => {
    // Tìm thẻ con có class "price"
    const priceElement = product.querySelector(".price");

    if (priceElement) {
      // Lấy nội dung text và loại bỏ dấu chấm, ký tự ₫
      const priceText = priceElement.textContent
        .replace(/\./g, "") //Loại bỏ tất cả dấu chấm.
        .replace("₫", "") //Loại bỏ ký tự ₫.
        .trim(); // Loại bỏ khoảng trắng thừa.

      // Chuyển sang số và cộng dồn vào tổng giá
      totalPrice += parseInt(priceText, 10) || 0;
    }
  });
  const fomat_total_price = totalPrice.toLocaleString("vi-VN"); // định dạng lại kiểu tiền 80.000.000

  //set tổng giá trị đơn hàng
  const parent = document.querySelector(".total_price");
  parent.querySelector(
    ".price"
  ).innerHTML = `${fomat_total_price} <span>₫</span>`;
}

function price_Save() {
  // Tìm tất cả các thẻ cha có class "listproduct"
  const listProducts = document.querySelectorAll(".listproduct");

  let totalPrice_save = 0;

  // Lặp qua từng thẻ cha
  listProducts.forEach((product) => {
    // Tìm thẻ con có class "last_price"
    const priceElement = product.querySelector(".last_price");
    // Tìm thẻ input con có class "number-input" trong từng sản phẩm
    const input = product.querySelector(".number-input input");

    // Lấy số lượng sản phẩm
    let quantity = parseInt(input.value) || 1; // Giá trị hiện tại trong input
    if (priceElement) {
      // Lấy nội dung text và loại bỏ dấu chấm, ký tự ₫
      const priceText = priceElement.textContent
        .replace(/\./g, "") // Loại bỏ tất cả dấu chấm
        .replace("₫", "") // Loại bỏ ký tự ₫
        .trim(); // Loại bỏ khoảng trắng thừa

      // Chuyển đổi giá trị text thành số
      const price = parseInt(priceText, 10);
      // Tính giá trị tổng cho mỗi sản phẩm và cộng dồn vào tổng giá
      const gia = price * quantity;
      // Cộng dồn vào tổng giá của tất cả sản phẩm
      totalPrice_save += gia;
    }
  });

  //Lấy tổng giá đơn hàng trừ giá trước tiết kiệm
  const total_price = document.querySelector(".total_price .price");
  const textPrice = total_price.textContent
    .replace(/\./g, "")
    .replace("₫", "")
    .trim();

  // Chuyển đổi giá trị text thành số
  const price = parseInt(textPrice, 10);

  const price_save = (totalPrice_save - price).toLocaleString("vi-VN");
  document.querySelector(
    ".total_price .tietkiem"
  ).innerHTML = `Tiết kiệm: ${price_save} <span>₫</span>`;
}

//table Query
$(document).ready(function () {
  $("#table_donhang").DataTable({
    pageLength: 10, // Số dòng tối đa mỗi trang
    lengthMenu: [5, 10, 25, 50, 100], // Tùy chọn hiển thị số dòng
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "15%", targets: 1 },
      { width: "15%", targets: 2 },
      { width: "10%", targets: 3 },
      { width: "15%", targets: 4 },
      { width: "15%", targets: 5 },
      { width: "15%", targets: 6 },
      { width: "15%", targets: 7 }, // Cột 1 chiếm 5%
    ],

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

// set màu tình trạng đơn hàng
function setTinhTrangdh() {
  const element = document.getElementById("tinhtrang");
  const statusText = element.textContent.trim(); // Lấy nội dung văn bản

  // Thay đổi màu sắc trực tiếp dựa trên nội dung văn bản
  if (statusText === "Đang xử lý") {
    element.style.color = "orange"; // Màu vàng
  } else if (statusText === "Hủy") {
    element.style.color = "red"; // Màu đỏ
  } else if (statusText === "Hoàn thành") {
    element.style.color = "green"; // Màu xanh
  } else if (statusText === "Đang gửi hàng") {
    element.style.color = "purple"; // Màu đỏ
  }
}
