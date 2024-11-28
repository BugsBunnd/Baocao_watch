<link rel="stylesheet" href="../css/css_admin/donhang.css" />

<div class="container_donhang">
      <div class="title">
        <div class="icon">
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
          <div class="cancel p-2">
            <button onclick="toggleDetail()">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 384 512"
                width="18px"
                hight="18px"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                />
              </svg>
            </button>
          </div>
        </div>

        <div class="list_card">
          <div class="listproduct">
            <div class="img">
              <div class="icon">
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
              </div>
              <div class="image_product">
                <img src="../img/watch_002.webp" alt="ảnh đồng hồ" />
              </div>
              <div class="container_name_price">
                <div class="name">Đồng Hồ Nam Thanh Lịch Cá tính</div>
                <div class="list_price">
                  <!-- Ẩn để cập nhật giá gốc -->
                  <div class="giagoc" hidden>40.000.000</div>
                  <div class="price">40.000.000 <span>₫</span></div>
                  <div class="last_price">50.000.000 <span>₫</span></div>
                  <div class="number-input">
                    <button onclick="changeValue(this, -1)">-</button>
                    <input
                      type="text"
                      id="numberInput"
                      value="1"
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

          <div class="listproduct">
            <div class="img">
              <div class="icon">
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
              </div>
              <div class="image_product">
                <img src="../img/watch_002.webp" alt="ảnh đồng hồ" />
              </div>
              <div class="container_name_price">
                <div class="name">Đồng Hồ Nam Thanh Lịch Cá tính</div>
                <div class="list_price">
                  <div class="giagoc" hidden>2.000.000</div>
                  <div class="price">2.000.000 <span>₫</span></div>
                  <div class="last_price">3.000.000 <span>₫</span></div>
                  <div class="number-input">
                    <button onclick="changeValue(this, -1)">-</button>
                    <input
                      type="text"
                      id="numberInput"
                      value="1"
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
        </div>
        <div class="total_price">
          <div class="lable">Tổng tiền:</div>
          <div class="price">58.933.000 <span>₫</span></div>
          <div class="tietkiem">Tiết kiệm: 800.000 <span>₫</span></div>
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
                name="flexRadioDefault"
                id="flexRadioDefault2"
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
                  />
                  <label for="floatingInput">Họ và tên</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com"
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
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email address</label>
            </div>
          </div>

          <div class="address p-2">
            <div class="row">
              <div class="col">
                <select
                  class="form-select"
                  id="provinceSelect"
                  aria-label="Default select example"
                >
                  <option disabled selected>Chọn Tỉnh/Thành</option>
                </select>
              </div>
              <div class="col-4">
                <select
                  class="form-select"
                  id="districtSelect"
                  aria-label="Default select example"
                >
                  <option selected>Chọn Quận huyện</option>
                </select>
              </div>
              <div class="col-4">
                <select
                  class="form-select"
                  id="wardSelect"
                  aria-label="Default select example"
                >
                  <option selected>Chọn Phường/Xã</option>
                </select>
              </div>
            </div>
          </div>

          <div class="text_address p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Số nhà, tên đường...</label>
            </div>
          </div>

          <div class="ghichu p-2">
            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Thêm ghi chú (nếu có)...</label>
            </div>
          </div>

          <div class="nguoikhacnhan">
            <div class="container mt-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="otherReceiver"
                />
                <label class="form-check-label" for="otherReceiver">
                  Người khác nhận hàng (nếu có)
                </label>
              </div>

              <!-- Hidden Form -->
              <div id="receiverInfo" class="hidden mt-3 cartoon-border">
                <div class="d-flex align-items-center mb-3">
                  <!-- Radio buttons -->
                  <div class="form-check me-3">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="radioMale"
                      value="Anh"
                    />
                    <label class="form-check-label" for="radioMale">Anh</label>
                  </div>
                  <div class="form-check me-3">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="radioFemale"
                      value="Chị"
                    />
                    <label class="form-check-label" for="radioFemale"
                      >Chị</label
                    >
                  </div>
                </div>

                <!-- Input fields for name and phone -->
                <div class="d-flex">
                  <input
                    type="text"
                    class="form-control me-3"
                    placeholder="Nhập họ và tên người nhận"
                    id="receiverName"
                  />
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nhập số điện thoại"
                    id="receiverPhone"
                  />
                </div>
              </div>
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
                <select
                  class="form-select border-success"
                  aria-label="Default select example"
                >
                  <option selected>Chọn tình trạng đơn hàng</option>
                  <option style="color: red" value="1">Hủy</option>
                  <option style="color: orangered" value="2">Đang xử lý</option>
                  <option style="color: purple" value="2">Đang gửi hàng</option>
                  <option style="color: green" value="3">Hoàn thành</option>
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

      <!-- table đơn hàng -->
      <div class="table_donhang">
        <!-- bảng danh mục  -->
        <div class="bang">
          <table id="table_donhang" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Số lượng sản phẩm</th>
                <th>Tổng tiền</th>
                <th>Ghi chú</th>
                <th>Thời gian đặt hàng</th>
                <th>Tình trạng</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ví dụ thêm 15 dòng -->
              <tr>
                <td>001</td>
                <td>Nguyễn Thanh Nam</td>
                <td>12 sản phẩm</td>
                <td style="color: green">400000 <span>VNĐ</span></td>
                <td>Hàng rất tốt mình lại quay lại mua nữa nè</td>
                <td>20/11/2025 8:25:47</td>
                <td id="tinhtrang">Hoàn thành</td>
                <td>
                  <button class="btn_sua" onclick="toggleDetail()">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 576 512"
                      width="15px"
                      hight="15px"
                      fill="white"
                    >
                      <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path
                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"
                      />
                    </svg>
                    Chi tiết đơn hàng
                  </button>
                  <button class="btn_xoa">
                    <a href="">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        width="15px"
                        hight="15px"
                        fill="white"
                      >
                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                          d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"
                        />
                      </svg>
                      Xóa</a
                    >
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ===================================================js============================================ -->
    <!-- scripbootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Link jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Link DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <!-- js của mình -->
    <script src="../js/js_admin/donhang.js"></script>