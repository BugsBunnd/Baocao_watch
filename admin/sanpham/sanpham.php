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
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
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
                <label for="name" class="form-label"
                  >Tên sản phẩm</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Nhập tên sản phẩm"
                  name="name"
                />
              </div>

              <!-- price -->
              <div class="p-2">
                <label for="last_price" class="form-label">Giá gốc</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nhập giá sản phẩm"
                    id="last_price"
                    name="giagoc"
                  />
                  <span class="input-group-text">VNĐ</span>
                </div>
              </div>

              <!-- price sell -->
              <div class="p-2">
                <label for="giaban" class="form-label">Giá bán </label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nhập giá sản phẩm"
                    id="giaban"
                    name="giaban"
                    
                  />
                  <span class="input-group-text">VNĐ</span>
                </div>
              </div>

              <!-- discount -->
              <div class="mb-2 p-2">
                <label for="tile" class="form-label">Tỉ lệ giảm giá</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="price">$</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="vd: 5 = 5% giảm giá"
                    id="tile"
                    readonly 
                    style="color: red;"
                    name="tilegiam"
                  />
                  <span class="input-group-text">%</span>
                </div>
              </div>

              <!-- select danh mục cha -->
              <div class="p-2 mb-2">
                <select
                  class="form-select"
                  aria-label="Default select example"
                  id="danhmucsp"
                  name="danhmuc"
                  
                >
                  <option value="" selected disabled>Chọn Danh Mục Cha</option>
                  <?php 
                      foreach($listdanhmuc as $danhmuc){
                          extract($danhmuc);
                          echo '<option value="' . $id . '">' . $name . '</option>';
                      }
                  ?>
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
                  id="file_anhsp"
                  name="anhsp"
                  
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
                  id="chitiet_anhsp"
                  name="anhchitiet[]"
                  multiple
                  
                />
              </div>


            </div>
            <div class="container_addspright col-6">
              <!-- xuất xứ -->
              <div class="mb-2 p-2">
                <label for="exampleFormControlInput1" class="form-label"
                  >Xuất xứ sản phẩm</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Nhập xuất xứ"
                  name="xuatxu"
                  
                />
              </div>
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
                  name="tenthuonghieu"
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
                  name="doituong"
                  
                />
              </div>

              <!-- select loại máy -->

              <div class="mb-2 p-2">
                <label for="loaimay" class="form-label"
                  >Loại máy</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="loaimay"
                  placeholder="Nhập loại máy"
                  name="loaimay"
                />
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
                  name="chatlieuday"
                />
              </div>

              <!-- kháng nước -->

              <div class="mb-2 p-2">
                <label for="khangnuoc" class="form-label"
                  >Kháng nước</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="khangnuoc"
                  placeholder="vd: Có or Không"
                  name="khangnuoc"
        
                />
              </div>

              <!-- chát liệu kính-->
              <div class="mb-2 p-2">
                <label for="chatlieu" class="form-label"
                  >Chất liệu kính</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="chatlieu"
                  placeholder="Nhập chất liệu kính "
                  name="chatlieukinh"
                />
              </div>
            </div>
          </div>
          <!-- Nút submit -->
          <div class="d-flex p-2">
            <button type="submit" onclick="return ktform_add_sp()" name="add_sp" value="1" class="btn btn-success ms-auto">
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
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá bán</th>
                <th>Ngày thêm</th>
                <th>Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              <!-- show sản phẩm lên -->
              <?php
              // Tạo ánh xạ ID danh mục => Tên danh mục
              $danhmuc_map = array_column($listdanhmuc, 'name', 'id');
              foreach($listsanpham as $sanpham){
                  extract($sanpham);
                  $path_anhsp= "../uploads/".$anhsp;
                  $xoasp = "index.php?act=xoasp&id=".$id;
                  $suasp = "index.php?act=showsp&id=".$id;
                  $ten_danhmuc = $danhmuc_map[$iddm] ?? "Không rõ"; // Lấy tên danh mục từ ánh xạ
                  echo '<tr>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>'.$ten_danhmuc.'</td>
                  <td>
                    <img
                      src="'.$path_anhsp.'"
                      alt="ảnh sản phẩm"
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
                  <td>'.$giaban.'</td>
                  <td>'.$create_at.'</td>

                  <td>
                    <button class="btn_sua">
                     <a href="'.$suasp.'">
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
                      Sửa</a>
                    </button>
                    <button class="btn_xoa">
                      <a href="'.$xoasp.'" onclick="return confirm(\'Bạn chắc chắn muốn xóa sản phẩm này?\')">
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
                </tr>';
                }

              ?>
              <!-- Ví dụ thêm 15 dòng -->
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