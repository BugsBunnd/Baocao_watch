<link rel="stylesheet" href="../css/css_admin/donhang.css" />
<style>

        .titles {
          display: flex;
          gap: 10px;
          margin-top: 80px;
          margin-left: 30%;
        }
        .titles p {
          font-size: 1.4rem;
        }

        .back{
          margin-left: 30%;
        }
        .back a{
          text-decoration: none;
          font-size: 1.1rem;
        }

    .title {
        display: flex;
        gap: 10px;
        margin-top: 5px;
        margin-left: 2.5%;
        }
    .container_donhang .title p {
        font-size: 1.4rem;
        }

    .container_chitietdh {
    max-width:40% ; /* Ban đầu ẩn */
    height: auto; /* Chiều cao ban đầu ẩn */
    overflow: hidden; /* Ẩn nội dung khi thu nhỏ */
    background-color: rgb(240, 237, 237);
    margin: auto;
    border-radius: 8px;
    margin-top: 30px;
    margin-bottom: 10px;
    transition: height 1s ease, max-width 1s ease; /* Hiệu ứng mượt mà */
    }
    .container_chitietdh.open {
    max-width: 40%; /* Mở rộng chiều rộng */
    height: auto; /* Đặt thành tự động (sẽ tính bằng JavaScript) */
    }

    .listproduct {
    width: 95%;
    height: 120px;
    margin: auto;
    margin-top: 10px;
    border-radius: 8px;
    background-color: white;
    border: 1px solid rgb(170, 170, 170);
    }

    .listproduct .img {
    display: flex;
    position: relative;
    }

    /* img item sản phẩm  */
    .container_chitietdh .image_product img {
    width: auto;
    height: 100%;
    max-width: 100%;
    max-height: 120px;
    object-fit: contain;
    border-radius: 8px;
    padding: 10px;
    }

    /* icon x sản phẩm */
    .container_chitietdh .listproduct .icon {
    display: inline-block;
    transition: transform 0.5s ease, fill 0.5s ease;
    position: absolute;
    padding-left: 5px;
    }

    .container_chitietdh .listproduct .icon:hover svg {
    fill: red;
    border-radius: 50%;
    transform: scale(1.2);
    }

    /* Khung cho phần name và price cho chi tiết sp */
    .container_chitietdh .container_name_price {
    width: 100%;
    height: 118px;
    background-color: #fdfdfd;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    display: flex;
    }

    /* Tên sản phẩm */
    .container_chitietdh .container_name_price .name {
    width: 70%;
    padding: 10px;
    font-weight: bold;
    /* font-size: 0.9rem; */
    }

    /* Thông tin price sản phẩm */
    .container_chitietdh .container_name_price .list_price {
    width: 30%;
    padding-top: 10px;
    padding-right: 20px;
    text-align: right;
    }

    .container_chitietdh .container_name_price .price {
    color: #dd042d;
    font-weight: bold;
    font-size: 1.1rem;
    }
    .container_chitietdh .container_name_price .price span {
    font-size: 1rem;
    }

    .container_chitietdh .container_name_price .last_price {
    color: gray;
    text-decoration: line-through;
    font-size: 1.1rem;
    }

    .container_chitietdh .container_name_price .last_price span {
    font-size: 1rem;
    }

    /* tăng giảm số lượng */
    .container_chitietdh .container_name_price .number-input {
    margin-top: 10px;
    display: flex;
    align-items: center; /* Căn chỉnh theo chiều dọc */
    gap: 2px;
    justify-content: end;
    height: 30px; /* Cung cấp chiều cao cho cả 3 phần tử */
    }


    .container_chitietdh
    .container_name_price
    .number-input
    input {
    width: 30px;
    text-align: center;
    border-radius: 3px;
    background-color: #d4d2d2;
    border: none;
    height: 100%; /* Chiều cao của input sẽ tự động bằng chiều cao của container */
    }


  .container_chitietdh
  .container_name_price
  .number-input
    button {
    width: 25px;
    text-align: center;
    border: 1px solid rgb(216, 216, 216);
    border-radius: 3px;
    background-color: #ffffff;
    color: #007bff;
    font-size: 1.1rem;
    height: 100%; /* Đảm bảo nút có chiều cao bằng với container */
    }
    /* Tổng tiền  */


/* Tổng tiền  */
.container_chitietdh .total_price {
  display: grid;
  grid-template-areas:
    "lable price"
    ". tietkiem"; /* Lable chỉ xuất hiện trên hàng đầu, . giữ chỗ ở cột đầu tiên */
  grid-template-columns: auto 1fr; /* Lable có kích thước tự động, price giãn hết chiều rộng */
  row-gap: 10px; /* Khoảng cách giữa các hàng */
  margin-top: 20px;
}

.container_chitietdh .total_price .lable {
  grid-area: lable;
  align-self: start; /* Căn lề trên */
  margin-left: 20px;
  font-weight: bolder;
}

.container_chitietdh .total_price .price {
  grid-area: price;
  justify-self: end; /* Đẩy sang phải */
  margin-right: 40px;
  color: #dd042d;
  font-weight: bold;
  font-size: 1.1rem;
}

.container_chitietdh .total_price .price span {
  font-size: 1rem;
}

.container_chitietdh .total_price .tietkiem {
  grid-area: tietkiem;
  justify-self: end; /* Đẩy sang phải */
  margin-right: 40px;
  color: green; /* Màu chữ khác để nổi bật */
  font-size: 14px;
}


</style>



<div class="titles">
    <div>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            width="25px"
            hight="25px"
            fill="black"
            >
            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M92.5 0L208 0c40 0 52 24 64 48s24 48 64 48l85.2 0C436 96 448 108 448 122.8c0 3.4-.7 6.8-1.9 10L409.6 224 384 288l-256 0-16-64L64.9 35.4c-.6-2.3-.9-4.6-.9-6.9C64 12.8 76.8 0 92.5 0zM79 224l16 64-15 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 256 0 48 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-13.5 0 25.6-64 19.9 0c26.5 0 48 21.5 48 48l0 112L0 384 0 272c0-26.5 21.5-48 48-48l31 0zM0 416l512 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48l0-48z"
            />
        </svg>
    </div>
    <div>
      <p>Quản lý đơn hàng</p>
    </div>
  </div>

<div class="back">
  <a href="index.php?act=donhang"><i class="fa-solid fa-arrow-left"></i> Danh mục đơn hàng</a>
</div>


<!-- Bảng chi tiết đơn hàng -->
      <div class="container_chitietdh">
        <div class="container_title">
          <div class="title">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 512"
                width="25px"
                hight="25px"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M58.9 42.1c3-6.1 9.6-9.6 16.3-8.7L320 64 564.8 33.4c6.7-.8 13.3 2.7 16.3 8.7l41.7 83.4c9 17.9-.6 39.6-19.8 45.1L439.6 217.3c-13.9 4-28.8-1.9-36.2-14.3L320 64 236.6 203c-7.4 12.4-22.3 18.3-36.2 14.3L37.1 170.6c-19.3-5.5-28.8-27.2-19.8-45.1L58.9 42.1zM321.1 128l54.9 91.4c14.9 24.8 44.6 36.6 72.5 28.6L576 211.6l0 167c0 22-15 41.2-36.4 46.6l-204.1 51c-10.2 2.6-20.9 2.6-31 0l-204.1-51C79 419.7 64 400.5 64 378.5l0-167L191.6 248c27.8 8 57.6-3.8 72.5-28.6L318.9 128l2.2 0z"
                />
              </svg>
            </div>
            <div>
              <p>Chi tiết đơn hàng</p>
            </div>
          </div>
        </div>

        <div class="list_card">
        <?php
            // Xử lý dữ liệu từ bảng donhang
            if (isset($donhang) && is_array($donhang) && count($donhang) > 0) {
                extract($donhang);
            } else {
                echo "Dữ liệu đơn hàng không tồn tại!";
            }

        ?>

        <?php
            // Duyệt qua mảng $dhsanpham và thêm tiền tố 'cart_' vào các biến
            foreach ($dhsanpham as $cart) {
                $hinhsp = $cart['hinhsp'];
                $tensp = $cart['tensp'];
                $giasp = $cart['dongia'];
                $soluong = $cart['soluong'];
                $path_anhsp = "../uploads/" . $hinhsp;  // Đảm bảo sử dụng biến với tiền tố 'cart_'

                echo '
                    <div class="listproduct">
                        <div class="img">
                            <div class="image_product">
                                <img src="' . $path_anhsp . '" alt="ảnh đồng hồ" />
                            </div>
                            <div class="container_name_price">
                                <div class="name">'.$tensp.'</div>
                                <div class="list_price">
                                    <!-- Ẩn để cập nhật giá gốc -->
                                    <div class="giagoc" hidden>'. number_format($giasp, 0, ',', '.') .'</div>
                                    <div class="price">'. number_format($giasp, 0, ',', '.') .' <span>₫</span></div>
                                    <div class="number-input">
                                        <button onclick="changeValue(this, -1)">-</button>
                                        <input
                                            type="text"
                                            id="numberInput"
                                            value="'.$soluong.'"
                                            min="1"
                                            max="100000000"
                                            readonly
                                        />
                                        <button onclick="changeValue(this, +1)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>


        </div>
        <div class="total_price">
          <div class="lable">Tổng tiền:</div>
          <div class="price"><?php echo number_format($tongtien, 0, ',', '.'); ?><span>₫</span></div>
        </div>

        <hr />
        <div class="info">
          <div class="sex">
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault1"
                <?php if (isset($gioitinh) && $gioitinh == 0) echo 'checked'; ?>
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Anh
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                id="flexRadioDefault2"
                <?php if (isset($gioitinh) && $gioitinh == 1) echo 'checked'; ?>
              />
              <label class="form-check-label" for="flexRadioDefault2">
                Chị
              </label>
            </div>
          </div>

          <div class="ten_sodt p-2">
            <div class="row g-2">
              <div class="col-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com"
                    required
                    value="<?=$name?>"
                  />
                  <label for="floatingInput">Họ và tên</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="sdt"
                    value="<?=$sodt?>"
                    required
                  />
                  <label for="sdt">Số điện thoại</label>
                </div>
              </div>
            </div>
          </div>

          <div class="email p-2">
            <div class="form-floating">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                value="<?=$email?>"
              />
              <label for="floatingInput">Email address</label>
            </div>
          </div>


          <div class="text_address p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                value="<?=$diachi?>"
              />
              <label for="floatingInput">Địa chỉ nhận hàng...</label>
            </div>
          </div>

          <div class="ghichu p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                value="<?=$ghichu?>"
              />
              <label for="floatingInput">Thêm ghi chú (nếu có)...</label>
            </div>
          </div>


          <hr />
          <p class="title_tt">Phương thức thanh toán</p>

          <div class="payment p-2">
            <div class="shipcode">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipcode"
                  id="shipcode"
                  value="0"
                  <?php if (isset($pttt) && $pttt == 0) echo 'checked'; ?>
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Thanh toán tiền mặt khi nhận hàng (COD)
                </label>
              </div>
            </div>
            <!-- paycard -->
            <div class="paycard">
              <input
                class="form-check-input"
                type="radio"
                name="shipcode"
                id="payment"
                value="1"
                <?php if (isset($pttt) && $pttt == 1) echo 'checked'; ?>
                onclick="togglePaymentInfo()"
              />
              <label class="form-check-label" for="payment">
                Chuyển khoản ngân hàng
              </label>

              <div class="container_infopayment">
                <div class="infopayment">
                  <div class="img">
                    <img
                      src="../img/logo_bank.png"
                      alt="Vietcombank"
                      width="45px"
                      height="45px"
                    />
                  </div>
                  <div class="info_pay">
                    <p class="name">Chi nhánh Vĩnh Long</p>
                    <p class="thogtin">STK 999666999 - Nguyễn Minh Quân</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="trangthai p-2 mt-4">
          <div class="row mb-2">
                <div class="col-6">
                    <select class="form-select border-success" aria-label="Default select example">
                    <option disabled>Chọn tình trạng đơn hàng</option>
                    <option style="color: red" value="0" <?php if (isset($tinhtrang) && $tinhtrang == 0) echo 'selected'; ?>>Hủy</option>
                    <option style="color: orangered" value="1" <?php if (isset($tinhtrang) && $tinhtrang == 1) echo 'selected'; ?>>Đang xử lý</option>
                    <option style="color: purple" value="2" <?php if (isset($tinhtrang) && $tinhtrang == 2) echo 'selected'; ?>>Đang gửi hàng</option>
                    <option style="color: green" value="3" <?php if (isset($tinhtrang) && $tinhtrang == 3) echo 'selected'; ?>>Hoàn thành</option>
                    </select>
                </div>
              <div class="col-6">
                <button type="button" class="btn btn-success w-100">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                    width="22px"
                    hight="22px"
                    fill="white"
                  >
                    <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-242.7c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32L64 32zm0 96c0-17.7 14.3-32 32-32l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 224c-17.7 0-32-14.3-32-32l0-64zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
                    />
                  </svg>

                  Cập nhật những thay đổi
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

<script>
    price_Total(); //show tổng giá đơn hàng
    price_Save(); //show giá tiết kiệm được khi mua có giảm giá
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

</script>