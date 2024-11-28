<link rel="stylesheet" href="../css/css_admin/sanpham.css" />
<div class="container_sp">
      <!-- tiêu đề trang -->
      <div class="title">
        <div class="icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            width="25px"
            hight="25px"
          >
            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
            />
          </svg>
        </div>
        <div><p>Danh mục sản phẩm</p></div>
      </div>

      <!-- add sản phẩm -->
      <div class="container_addsp">
        <form action="#">
          <div class="title_form">
            <div class="title">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
                width="25px"
                hight="25px"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20l44 0 0 44c0 11 9 20 20 20s20-9 20-20l0-44 44 0c11 0 20-9 20-20s-9-20-20-20l-44 0 0-44c0-11-9-20-20-20s-20 9-20 20l0 44-44 0c-11 0-20 9-20 20z"
                />
              </svg>
              <p>Thêm sản phẩm</p>
            </div>
            <!-- cancel add -->
            <div class="btn_cancell">
              <button type="button" onclick="ShowAddSP()">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 384 512"
                  width="18px"
                  hight="18px"
                >
                  <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                  />
                </svg>
              </button>
            </div>
          </div>

          <div class="addsp_container row">
            <div class="container_addspleft col-6">
              <!-- name -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Tên sản phẩm</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập tên sản phẩm"
                  required
                />
              </div>

              <!-- price -->
              <div class="p-2">
                <label for="price" class="form-label">Giá sản phẩm</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nhập giá sản phẩm"
                    required
                  />
                  <span class="input-group-text">VNĐ</span>
                </div>
              </div>

              <!-- discount -->
              <div class="mb-2 p-2">
                <label for="price" class="form-label">Tỉ lệ giảm giá</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ví dụ bạn nhập 5 ,thì giá thật bằng giá sản phẩm trừ đi 5%"
                    required
                  />
                  <span class="input-group-text">%</span>
                </div>
              </div>

              <!-- select danh mục cha -->
              <div class="p-2 mb-2">
                <select
                  class="form-select"
                  aria-label="Default select example"
                  required
                >
                  <option value="" selected disabled>Chọn Danh Mục Cha</option>
                  <option value="1">Nam Cá Tính</option>
                  <option value="2">Hồng Mạnh Mẽ</option>
                  <option value="3">Nữ Siêu Mạnh</option>
                </select>
              </div>

              <!-- Ảnh sản phẩm -->
              <div class="mb-2 p-2">
                <label for="formFile" class="form-label"
                  >Chọn ảnh sản phẩm</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="formFile"
                  required
                />
              </div>

              <!-- Ảnh chi tiết sp -->
              <div class="mb-3 p-2">
                <label for="formFileMultiple" class="form-label"
                  >Chọn danh sách ảnh chi tiết sản phẩm</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="formFileMultiple"
                  multiple
                  required
                />
              </div>

              <!-- select xuất xứ -->
              <div class="p-2 mb-2">
                <label for="xuatxu" class="form-label">Xuất xứ</label>
                <select
                  class="form-select"
                  aria-label="Default select example"
                  required
                >
                  <option value="" selected disabled>
                    Chọn xuất xứ sản phẩm
                  </option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo (Brazzaville)</option>
                  <option value="CD">Congo (Kinshasa)</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="SZ">Eswatini</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GR">Greece</option>
                  <option value="GD">Grenada</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HN">Honduras</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KR">South Korea</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="QA">Qatar</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
              </div>
            </div>
            <div class="container_addspright col-6">
              <!-- Thương hiệu -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Tên thương hiệu</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập tên thương hiệu sản phẩm"
                  required
                />
              </div>

              <!-- Đối tượng -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Đối tượng</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Ví dụ: Nam, Nữ"
                  required
                />
              </div>

              <!-- select loại máy -->
              <div class="p-2 mb-2">
                <label for="loaimay" class="form-label">Loại máy</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="" selected disabled>Chọn loại máy</option>
                  <option value="mechanical_manual">
                    Máy cơ lên dây thủ công
                  </option>
                  <option value="mechanical_automatic">Máy cơ tự động</option>
                  <option value="quartz">Máy quartz</option>
                  <option value="hybrid">Máy hybrid</option>
                  <option value="solar">Máy năng lượng mặt trời</option>
                  <option value="kinetic">Máy kinetic</option>
                  <option value="smartwatch">Đồng hồ thông minh</option>
                </select>
              </div>

              <!-- Chất liệu dây -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Chất liệu dây</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập chất liệu dây đồng hồ"
                  required
                />
              </div>

              <!-- select loại máy -->
              <div class="p-2 mb-2">
                <label for="khangnuoc" class="form-label">Kháng nước</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="no_resistance">Không kháng nước</option>
                  <option value="30m">
                    3 ATM / 30m - Chống nước nhẹ (rửa tay, mưa nhỏ)
                  </option>
                  <option value="50m">5 ATM / 50m - Chống nước khi tắm</option>
                  <option value="100m">
                    10 ATM / 100m - Chống nước khi bơi
                  </option>
                  <option value="200m">
                    20 ATM / 200m - Chống nước khi lặn nông
                  </option>
                  <option value="diver">
                    Diver's Watch - Lặn chuyên nghiệp
                  </option>
                </select>
              </div>

              <!-- select chất liệu kính -->
              <div class="p-2">
                <label for="chatlieukinh" class="form-label"
                  >Chất liệu kính</label
                >
                <select class="form-select" aria-label="Default select example">
                  <option value="stainless_steel">Thép không gỉ</option>
                  <option value="titanium">Titanium</option>
                  <option value="ceramic">Gốm</option>
                  <option value="plastic">Nhựa</option>
                  <option value="leather">Da</option>
                  <option value="rubber">Cao su</option>
                  <option value="gold">Vàng</option>
                  <option value="silver">Bạc</option>
                  <option value="carbon_fiber">Sợi carbon</option>
                  <option value="sapphire_glass">Kính sapphire</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Nút submit -->
          <div class="d-flex p-2">
            <button type="submit" class="btn btn-success ms-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
                width="20px"
                hight="20px"
                fill="white"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 128-168 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l168 0 0 112c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zM384 336l0-48 110.1 0-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39L384 336zm0-208l-128 0L256 0 384 128z"
                />
              </svg>
              Save
            </button>
          </div>
        </form>
      </div>
      <!-- edit sản phẩm -->
      <div class="container_editsp">
        <form action="#">
          <div class="title_form">
            <div class="title">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
                width="25px"
                hight="25px"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"
                />
              </svg>
              <p>Sửa thông tin sản phẩm</p>
            </div>
            <div class="btn_cancell">
              <button type="button" onclick="Cancell_edit()">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 384 512"
                  width="18px"
                  hight="18px"
                >
                  <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="addsp_container row">
            <div class="container_addspleft col-6">
              <!-- name -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Tên sản phẩm</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập tên sản phẩm"
                  required
                />
              </div>

              <!-- price -->
              <div class="p-2">
                <label for="price" class="form-label">Giá sản phẩm</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nhập giá sản phẩm"
                    required
                  />
                  <span class="input-group-text">VNĐ</span>
                </div>
              </div>

              <!-- discount -->
              <div class="mb-2 p-2">
                <label for="price" class="form-label">Tỉ lệ giảm giá</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ví dụ bạn nhập 5 ,thì giá thật bằng giá sản phẩm trừ đi 5%"
                    required
                  />
                  <span class="input-group-text">%</span>
                </div>
              </div>

              <!-- select danh mục cha -->
              <div class="p-2 mb-2">
                <select
                  class="form-select"
                  aria-label="Default select example"
                  required
                >
                  <option value="" selected disabled>Chọn Danh Mục Cha</option>
                  <option value="1">Nam Cá Tính</option>
                  <option value="2">Hồng Mạnh Mẽ</option>
                  <option value="3">Nữ Siêu Mạnh</option>
                </select>
              </div>

              <!-- Ảnh sản phẩm -->
              <div class="mb-2 p-2">
                <label for="formFile" class="form-label"
                  >Chọn ảnh sản phẩm</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="formFile"
                  required
                />
              </div>

              <!-- Ảnh chi tiết sp -->
              <div class="mb-3 p-2">
                <label for="formFileMultiple" class="form-label"
                  >Chọn danh sách ảnh chi tiết sản phẩm</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="formFileMultiple"
                  multiple
                  required
                />
              </div>

              <!-- select xuất xứ -->
              <div class="p-2 mb-2">
                <label for="xuatxu" class="form-label">Xuất xứ</label>
                <select
                  class="form-select"
                  aria-label="Default select example"
                  required
                >
                  <option value="" selected disabled>
                    Chọn xuất xứ sản phẩm
                  </option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo (Brazzaville)</option>
                  <option value="CD">Congo (Kinshasa)</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="SZ">Eswatini</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GR">Greece</option>
                  <option value="GD">Grenada</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HN">Honduras</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KR">South Korea</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="QA">Qatar</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
              </div>
            </div>
            <div class="container_addspright col-6">
              <!-- Thương hiệu -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Tên thương hiệu</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập tên thương hiệu sản phẩm"
                  required
                />
              </div>

              <!-- Đối tượng -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Đối tượng</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Ví dụ: Nam, Nữ"
                  required
                />
              </div>

              <!-- select loại máy -->
              <div class="p-2 mb-2">
                <label for="loaimay" class="form-label">Loại máy</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="" selected disabled>Chọn loại máy</option>
                  <option value="mechanical_manual">
                    Máy cơ lên dây thủ công
                  </option>
                  <option value="mechanical_automatic">Máy cơ tự động</option>
                  <option value="quartz">Máy quartz</option>
                  <option value="hybrid">Máy hybrid</option>
                  <option value="solar">Máy năng lượng mặt trời</option>
                  <option value="kinetic">Máy kinetic</option>
                  <option value="smartwatch">Đồng hồ thông minh</option>
                </select>
              </div>

              <!-- Chất liệu dây -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Chất liệu dây</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập chất liệu dây đồng hồ"
                  required
                />
              </div>

              <!-- select loại máy -->
              <div class="p-2 mb-2">
                <label for="khangnuoc" class="form-label">Kháng nước</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="no_resistance">Không kháng nước</option>
                  <option value="30m">
                    3 ATM / 30m - Chống nước nhẹ (rửa tay, mưa nhỏ)
                  </option>
                  <option value="50m">5 ATM / 50m - Chống nước khi tắm</option>
                  <option value="100m">
                    10 ATM / 100m - Chống nước khi bơi
                  </option>
                  <option value="200m">
                    20 ATM / 200m - Chống nước khi lặn nông
                  </option>
                  <option value="diver">
                    Diver's Watch - Lặn chuyên nghiệp
                  </option>
                </select>
              </div>

              <!-- select chất liệu kính -->
              <div class="p-2">
                <label for="chatlieukinh" class="form-label"
                  >Chất liệu kính</label
                >
                <select class="form-select" aria-label="Default select example">
                  <option value="stainless_steel">Thép không gỉ</option>
                  <option value="titanium">Titanium</option>
                  <option value="ceramic">Gốm</option>
                  <option value="plastic">Nhựa</option>
                  <option value="leather">Da</option>
                  <option value="rubber">Cao su</option>
                  <option value="gold">Vàng</option>
                  <option value="silver">Bạc</option>
                  <option value="carbon_fiber">Sợi carbon</option>
                  <option value="sapphire_glass">Kính sapphire</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Nút submit -->
          <div class="d-flex p-2">
            <button type="submit" class="btn btn-success ms-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
                width="20px"
                hight="20px"
                fill="white"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 128-168 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l168 0 0 112c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zM384 336l0-48 110.1 0-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39L384 336zm0-208l-128 0L256 0 384 128z"
                />
              </svg>
              Save Edit
            </button>
          </div>
        </form>
      </div>
      <!-- container table sản phẩm -->
      <div class="container_tbsp">
        <div class="title_tbsp">
          <div class="title_tb">
            <div class="icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
                width="25px"
                hight="25px"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l448 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l448 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zm96 64a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm104 0c0-13.3 10.7-24 24-24l224 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-224 0c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24l224 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-224 0c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24l224 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-224 0c-13.3 0-24-10.7-24-24zm-72-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM96 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"
                />
              </svg>
            </div>
            <div><p>Danh sách sản phẩm</p></div>
          </div>
          <div class="btn_addsp">
            <button type="button" class="btn btn-success" onclick="ShowAddSP()">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="15px"
                hight="15px"
                fill="white"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  fill="white"
                  d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"
                />
              </svg>

              Thêm sản phẩm mới
            </button>
          </div>
        </div>

        <!-- bảng danh mục  -->
        <div class="bang">
          <table id="table_sp" class="display" style="width: 100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Evaluate</th>
                <th>Extraday</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ví dụ thêm 15 dòng -->
              <tr>
                <td>001</td>
                <td>Nam cá tính</td>
                <td>Nam cá tính</td>
                <td>
                  <img
                    src="../img/watch.png"
                    alt="icon"
                    style="
                      width: auto;
                      height: 100%;
                      max-width: 100%;
                      max-height: 50px;
                      object-fit: contain;
                      border-radius: 8px;
                    "
                  />
                </td>
                <td>Nam cá tính</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>

                <td>25</td>
                <td>
                  <button class="btn_sua" onclick="ShowEditSP()">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      width="15px"
                      hight="15px"
                      fill="white"
                    >
                      <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path
                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                      />
                    </svg>
                    Sửa
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
              <tr>
                <td>001</td>
                <td>Nam cá tính</td>
                <td>Nam cá tính</td>
                <td>
                  <img
                    src="../img/watch.png"
                    alt="icon"
                    style="
                      width: auto;
                      height: 100%;
                      max-width: 100%;
                      max-height: 50px;
                      object-fit: contain;
                      border-radius: 8px;
                    "
                  />
                </td>
                <td>Nam cá tính</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing</td>

                <td>25</td>
                <td>
                  <button class="btn_sua" onclick="ShowEditSP()">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      width="15px"
                      hight="15px"
                      fill="white"
                    >
                      <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path
                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                      />
                    </svg>
                    Sửa
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
    <script src="../js/js_admin/sanpham.js"></script>