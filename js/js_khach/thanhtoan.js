price_Total(); //show tổng giá đơn hàng
price_Save(); //show giá tiết kiệm được khi mua có giảm giá
show_nknh(); //show người khác nhận hàng nếu có
populateProvinces(); // Hàm điền tỉnh vào select
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
    ".prices"
  ).innerHTML = `${fomat_total_price} <span>₫</span>`;

  price_Total();
  price_Save();
}

//show tổng giá đơn hàng
function price_Total() {
  //Tìm tất cả các thẻ cha có class "listproduct"
  const listProducts = document.querySelectorAll(".listproduct");

  let totalPrice = 0;

  // Lặp qua từng thẻ cha
  listProducts.forEach((product) => {
    // Tìm thẻ con có class "prices"
    const priceElement = product.querySelector(".prices");

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
    ".price_tong"
  ).innerHTML = `${fomat_total_price} <span>₫</span>`;
}

//show giá tiết kiệm được khi mua có giảm giá
function price_Save() {
  // Tìm tất cả các thẻ cha có class "listproduct"
  const listProducts = document.querySelectorAll(".listproduct");

  let totalPrice_save = 0;

  // Lặp qua từng thẻ cha
  listProducts.forEach((product) => {
    // Tìm thẻ con có class "last_price"
    const priceElement = product.querySelector(".last_prices");
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
  const total_price = document.querySelector(".total_price .price_tong");
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

// =================================== select tỉnh huyện xã
const data = {
  "Hà Nội": {
    "Ba Đình": ["Phúc Xá", "Vĩnh Phúc", "Cống Vị", "Đội Cấn", "Ngọc Hà"],
    "Hoàn Kiếm": ["Chả Cá", "Lý Thái Tổ", "Hàng Bạc", "Hàng Gai"],
    "Đống Đa": ["Phương Liên", "Thịnh Quang", "Kim Liên", "Trung Tự"],
    "Hai Bà Trưng": ["Bạch Mai", "Quỳnh Lôi", "Vĩnh Tuy", "Trương Định"],
    "Cầu Giấy": ["Dịch Vọng Hậu", "Dịch Vọng", "Mai Dịch", "Yên Hòa"],
  },
  "TP. Hồ Chí Minh": {
    "Quận 1": [
      "Bến Nghé",
      "Bến Thành",
      "Đa Kao",
      "Nguyễn Thái Bình",
      "Phạm Ngũ Lão",
    ],
    "Quận 2": ["Thảo Điền", "An Phú", "Cát Lái", "Bình Trưng Tây"],
    "Quận 3": ["Phạm Ngọc Thạch", "Trường Thọ", "Công Quý", "Võ Thị Sáu"],
    "Quận 4": ["Phú Thuận", "Tân Thuận Tây", "Tân Kiểng"],
    "Quận 5": ["Phường 1", "Phường 2", "Phường 3", "Phường 4"],
  },
  "Đà Nẵng": {
    "Hải Châu": ["Phước Ninh", "Phước Mỹ", "Bình Hiên", "Bình Thuận"],
    "Ngũ Hành Sơn": ["Khuê Mỹ", "Hòa Hải", "Hòa Quý"],
    "Liên Chiểu": ["Hòa Minh", "Phước Lý", "Lộc An"],
  },
  "Cần Thơ": {
    "Ninh Kiều": ["Cái Khế", "An Cư", "Cái Răng", "Hưng Lợi"],
    "Bình Thủy": ["Bình Thủy", "Long Tuyền", "An Thới"],
    "Ô Môn": ["Thới An", "Tân Thới", "Thới Long"],
  },
  "Bình Dương": {
    "Thủ Dầu Một": ["Chánh Mỹ", "Hiệp Thành", "Tương Bình Hiệp"],
    "Dĩ An": ["Dĩ An", "An Bình", "Tân Đông Hiệp"],
    "Thuận An": ["Thuận Giao", "Lái Thiêu", "An Phú"],
  },
  "Đồng Nai": {
    "Biên Hòa": ["Quyết Thắng", "Tân Hòa", "Tân Biên", "Long Bình"],
    "Long Khánh": ["Bàu Sen", "Suối Tre", "Xuân Lộc"],
  },
  "Bắc Giang": {
    "Bắc Giang": ["Lê Lợi", "Ngô Quyền", "Xương Giang", "Dĩnh Kế"],
    "Lục Nam": ["Lục Nam", "Lục Sơn", "Bắc Lũng"],
  },
  "Hải Phòng": {
    "Hồng Bàng": ["Sở Dầu", "Lạch Tray", "Bến Bính", "Nghĩa Xá"],
    "Ngô Quyền": ["Máy Chai", "Cầu Rào", "Vạn Mỹ"],
  },
  "Quảng Ninh": {
    "Hạ Long": ["Bãi Cháy", "Cẩm Phả", "Quảng Yên", "Hoành Bồ"],
    "Móng Cái": ["Móng Cái", "Trà Cổ"],
  },
  "Lâm Đồng": {
    "Đà Lạt": ["Phường 1", "Phường 2", "Phường 3", "Phường 4"],
    "Bảo Lộc": ["Lộc Sơn", "Lộc Phát", "Lộc Tiến"],
  },
  "Khánh Hòa": {
    "Nha Trang": ["Vĩnh Hòa", "Vĩnh Nguyên", "Phước Hải", "Phước Đồng"],
    "Cam Ranh": ["Cam Lâm", "Cam Nghĩa", "Bãi Dài"],
  },
  "Hà Giang": {
    "Hà Giang": ["Quang Trung", "Hữu Nguyên", "Thanh Bình"],
    "Vị Xuyên": ["Hòa Mạc", "Vị Thành", "Lạc Nông"],
  },
  "Nam Định": {
    "Nam Định": ["Trường Thi", "Cửa Bắc", "Văn Miếu", "Đông Kinh"],
    "Mỹ Lộc": ["Lộc Hạ", "Lộc Thủy"],
  },
  // Thêm các tỉnh khác...
};
const provinceSelect = document.getElementById("provinceSelect");
const districtSelect = document.getElementById("districtSelect");
const wardSelect = document.getElementById("wardSelect");
// Hàm điền tỉnh vào select
function populateProvinces() {
  for (let province in data) {
    let option = document.createElement("option");
    option.value = province;
    option.textContent = province;
    provinceSelect.appendChild(option);
  }
}
// Hàm điền quận/huyện vào select khi chọn tỉnh
function populateDistricts() {
  districtSelect.innerHTML = '<option value="">Chọn Quận huyện</option>';
  wardSelect.innerHTML = '<option value="">Chọn Phường/Xã</option>';

  let selectedProvince = provinceSelect.value;
  if (selectedProvince && data[selectedProvince]) {
    districtSelect.disabled = false; // Bật select quận/huyện
    let districts = data[selectedProvince];
    for (let district in districts) {
      let option = document.createElement("option");
      option.value = district;
      option.textContent = district;
      districtSelect.appendChild(option);
    }
  } else {
    districtSelect.disabled = true;
  }
}
// Hàm điền xã/phường khi chọn quận/huyện
function populateWards() {
  wardSelect.innerHTML = '<option value="">Chọn Phường/Xã</option>';

  let selectedProvince = provinceSelect.value;
  let selectedDistrict = districtSelect.value;

  if (
    selectedProvince &&
    selectedDistrict &&
    data[selectedProvince][selectedDistrict]
  ) {
    let wards = data[selectedProvince][selectedDistrict];
    for (let ward of wards) {
      let option = document.createElement("option");
      option.value = ward;
      option.textContent = ward;
      wardSelect.appendChild(option);
    }
  }
}
// Lắng nghe sự kiện thay đổi tỉnh, quận và xã
provinceSelect.addEventListener("change", function () {
  populateDistricts();
  populateWards();
});
districtSelect.addEventListener("change", populateWards);

// =============================================================

//show người khác nhận hàng nếu có
function show_nknh() {
  // Show/hide người khác nhận hàng nếu có
  const checkbox = document.getElementById("otherReceiver");
  const receiverInfo = document.getElementById("receiverInfo");

  checkbox.addEventListener("change", function () {
    if (this.checked) {
      receiverInfo.classList.remove("hidden");
      receiverInfo.classList.add("show"); // Add animation class
    } else {
      receiverInfo.classList.add("hidden");
      receiverInfo.classList.remove("show");
    }
  });
}
