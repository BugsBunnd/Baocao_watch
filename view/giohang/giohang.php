
<!-- css của giohang_thanhtoan -->
<link rel="stylesheet" href="/WatchShop/css/css_khach/thanhtoan.css" />
    <!-- Bảng chi tiết đơn hàng -->

    <div class="container_chitietdh">
        <div class="container_title">
          <div class="back">
            <a href="index.php?act=xuhuong">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
              >
                <path
                  d="M10 13L5 8L10 3"
                  stroke="#0066FF"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
              Tiếp tục mua sắm
            </a>
          </div>
          <div class="giohang">Giỏ hàng của bạn</div>
        </div>
      
        <div class="list_card">

        <?php

          $i=0;
          foreach ($_SESSION['mycard'] as $cart){
            $path_anh_sp = "/WatchShop/uploads/".$cart[2]; //get ảnh sp
            $xoasp = "index.php?act=delcart&idcart=".$i;
            echo '
                <div class="listproduct">
                    <div class="img">
                      <div class="icon">
                        <a href="'.$xoasp.'">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            height="18"
                            viewBox="0 0 18 18"
                            fill="gray"
                          >
                            <path
                              d="M9 1.6875C7.55373 1.6875 6.13993 2.11637 4.9374 2.91988C3.73486 3.72339 2.7976 4.86544 2.24413 6.20163C1.69067 7.53781 1.54586 9.00811 1.82801 10.4266C2.11017 11.8451 2.80661 13.148 3.82928 14.1707C4.85196 15.1934 6.15492 15.8898 7.57341 16.172C8.99189 16.4541 10.4622 16.3093 11.7984 15.7559C13.1346 15.2024 14.2766 14.2651 15.0801 13.0626C15.8836 11.8601 16.3125 10.4463 16.3125 9C16.3103 7.06129 15.5391 5.20263 14.1682 3.83176C12.7974 2.46088 10.9387 1.68974 9 1.6875ZM11.6477 10.8523C11.7 10.9045 11.7415 10.9665 11.7699 11.0348C11.7982 11.103 11.8128 11.1762 11.8129 11.2501C11.8129 11.324 11.7984 11.3972 11.7701 11.4655C11.7418 11.5338 11.7004 11.5959 11.6481 11.6481C11.5959 11.7004 11.5338 11.7418 11.4655 11.7701C11.3972 11.7984 11.324 11.8129 11.2501 11.8129C11.1762 11.8128 11.103 11.7982 11.0348 11.7699C10.9665 11.7415 10.9045 11.7 10.8523 11.6477L9 9.79541L7.14771 11.6477C7.04219 11.753 6.89919 11.8121 6.75013 11.812C6.60106 11.8119 6.45813 11.7527 6.35272 11.6473C6.24732 11.5419 6.18807 11.3989 6.18799 11.2499C6.18791 11.1008 6.24701 10.9578 6.3523 10.8523L8.20459 9L6.3523 7.14771C6.24701 7.04219 6.18791 6.89919 6.18799 6.75012C6.18807 6.60106 6.24732 6.45812 6.35272 6.35272C6.45813 6.24731 6.60106 6.18806 6.75013 6.18798C6.89919 6.1879 7.04219 6.247 7.14771 6.35229L9 8.20459L10.8523 6.35229C10.9578 6.247 11.1008 6.1879 11.2499 6.18798C11.3989 6.18806 11.5419 6.24731 11.6473 6.35272C11.7527 6.45812 11.8119 6.60106 11.812 6.75012C11.8121 6.89919 11.753 7.04219 11.6477 7.14771L9.79541 9L11.6477 10.8523Z"
                            ></path>
                          </svg>
                        </a>
                      </div>
                      <div class="image_product">
                        <img src="'.$path_anh_sp.'" alt="ảnh đồng hồ" />
                      </div>
                      <div class="container_name_price">
                        <div class="name">'.$cart[1].'</div>
                        <div class="list_price list_r">
                          <!-- Ẩn để cập nhật giá gốc -->
                          <div class="giagoc" hidden>'. number_format($cart[4], 0, ',', '.') .'</div>
                          <div class="prices_ban" hidden>'. number_format($cart[3], 0, ',', '.') .' <span>₫</span></div>
                          <div class="prices">'. number_format($cart[3], 0, ',', '.') .' <span>₫</span></div>
                          <div class="last_prices">'. number_format($cart[4], 0, ',', '.') .'<span>₫</span></div>
                          <div class="number-input">
                            <button onclick="changeValue(this, -1)">-</button>
                            <input
                              type="text"
                              id="numberInput"
                              value="'.$cart[5].'"
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
            $i+=1;
          }

        ?>
        </div>

      <div class="total_price">
        <div class="lable">Tổng tiền:</div>
        <div class="price_tong">0 <span>₫</span></div>
        <div class="tietkiem">Tiết kiệm: 0 <span>₫</span></div>
      </div>

      <hr />

      <div class="info">
        <form action="index.php?act=dathang" method="post">
          <div class="sex">
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="gioitinh"
                checked
              />
              <label class="form-check-label" for="flexRadioDefault1">
                Anh
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="gioitinh"
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
                    name ="name"
                    placeholder="Họ và tên"
                    required
                  />
                  <label for="name">Họ và tên</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input
                    type="number"
                    class="form-control"
                    name="sodt"
                    placeholder="Số điện thoại"
                    required
                  />
                  <label for="floatingInput">Số điện thoại</label>
                </div>
              </div>
            </div>
          </div>

          <div class="email p-2">
            <div class="form-floating">
              <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Email"
                required
              />
              <label for="floatingInput">Email address</label>
            </div>
          </div>


          <div class="text_address p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                name="diachi"
                placeholder="diachi"
                required
              />
              <label for="floatingInput">Địa chỉ nhận hàng...</label>
            </div>
          </div>

          <div class="ghichu p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                name="ghichu"
                placeholder="ghi chú"
              />
              <label for="floatingInput">Thêm ghi chú (nếu có)...</label>
            </div>
          </div>



          <hr />
          <p class="title_tt">Phương thức thanh toán</p>

          <div class="payment p-2">
            <!-- shipcode -->
            <div class="shipcode">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="pttt"
                  id="shipcode"
                  value="0"
                  checked
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
                name="pttt"
                id="payment"
                value="1"
                onclick="togglePaymentInfo()"
              />
              <label class="form-check-label" for="payment">
                Chuyển khoản ngân hàng
              </label>

              <div class="container_infopayment">
                <div class="infopayment">
                  <div class="img">
                    <img
                      src="/WatchShop/img/logo_bank.png"
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

          <input type="hidden" name="tongtien">
          <div class="btn_hoantat">
              <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-2">
              <button class="btn btn-primary py-3" type="submit" name="dathang">Hoàn tất đơn hàng</button>
              </div>
          </div>

          <div class="textdieukhoan">
            Bằng cách đặt hàng bạn đã đồng ý với Điều Khoản sử dụng của WatchShop
          </div>
        </form>
      </div>

    </div>

    <!-- ===================================================js============================================ -->
    <!-- scripbootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- bắt buộc gọi hàm cập nhật tổng giá -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        Tonggia();
        Tongtietkiem();
    });
    </script>
    <script src="/WatchShop/js/js_khach/thanhtoan.js"></script>