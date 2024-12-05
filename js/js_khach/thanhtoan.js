function changeValue(button, step) {
  // Tìm thẻ cha chứa nút bấm
  const parent = button.closest(".list_price");

  // Lấy input liên quan
  const input = parent.querySelector(".number-input input");
  let quantity = parseInt(input.value) || 1; // Giá trị hiện tại trong input

  // Giới hạn số lượng theo min và max
  const min = parseInt(input.min) || 1;
  const max = parseInt(input.max) || 100000000;

  if (quantity === min && step < 0) {
    return; // Dừng hàm nếu không thể giảm nữa
  }
  new_quantity = Math.min(Math.max(quantity + step, min), max); // Đảm bảo số lượng nằm trong giới hạn

  input.value = new_quantity; //cập nhật giá trị số lượng sản phẩm

  // Lấy ra giá bán của sản phẩm
  const price = parent
    .querySelector(".prices_ban")
    .textContent.replace(/\./g, "");

  let current_total_price = parseInt(
    parent.querySelector(".prices").textContent.replace(/\./g, "")
  );

  // Tính toán tổng giá trị sản phẩm
  let total_price;
  if (step > 0) {
    // Nếu bấm tăng
    total_price = current_total_price + parseInt(price);
  } else if (step < 0) {
    // Nếu bấm giảm
    total_price = current_total_price - parseInt(price);
  }

  // Định dạng lại tổng giá trị
  const formatted_total_price = total_price.toLocaleString("vi-VN"); // Định dạng kiểu tiền tệ Việt Nam

  // Cập nhật lại giá trị hiển thị
  parent.querySelector(
    ".prices"
  ).innerHTML = `${formatted_total_price} <span>₫</span>`;

  Tonggia();
  Tongtietkiem();
}

function Tonggia() {
  const gia_element = document.querySelectorAll(".prices");
  let tonggia = 0;

  // Duyệt qua từng phần tử và cộng giá trị lại
  gia_element.forEach((element) => {
    const priceText = element.textContent.replace(/\./g, "").trim();
    const price = parseInt(priceText) || 0;
    tonggia += price;
  });

  document.querySelector('input[name="tongtien"]').value = tonggia;

  const tonggia_vietnam = tonggia.toLocaleString("vi-VN") + " <span>₫</span>";
  document.querySelector(".price_tong").innerHTML = tonggia_vietnam;
}

function Tongtietkiem() {
  const tongtien =
    parseInt(
      document
        .querySelector(".price_tong")
        .textContent.replace(/\./g, "")
        .replace("₫", "")
        .trim()
    ) || 0;

  let total = 0;

  const giagocElements = document.querySelectorAll(".giagoc");
  const soluongElements = document.querySelectorAll(".number-input input");

  // Duyệt qua từng phần tử giagoc và soluong
  giagocElements.forEach((giagocElement, index) => {
    const giagoc =
      parseInt(
        giagocElement.textContent.replace(/\./g, "").replace("₫", "").trim()
      ) || 0;
    const soluong = parseInt(soluongElements[index].value) || 0;

    // Nhân giagoc với soluong và cộng vào tổng
    total += giagoc * soluong;
  });

  const tongtietkiem = total - tongtien;

  const tongtietkiem_vietnam =
    "Tiết kiệm: " + tongtietkiem.toLocaleString("vi-VN") + " <span>₫</span>";

  document.querySelector(".tietkiem").innerHTML = tongtietkiem_vietnam;
}
