<style>
    /* khi được select */
    header .main_menu ul li:nth-child(2) a {
    color: white; /* Màu chữ đỏ */
    }
    .title {
        display: flex;
        gap: 10px;
        margin-top: 80px;
        margin-left: 2.5%;
    }

    .title p {
        font-size: 1.4rem;
    }

    .back{
          margin-left: 2.5%;
        }

    .back a{
        text-decoration: none;
        font-size: 1.1rem;
    }

    .container_editsp {
    max-width: 95%;
    max-height: 820px;
    background-color: rgb(231, 231, 231);
    border-radius: 8px;
    margin-top: 10px;
    margin-bottom: 5px;
    margin-left: 2.5%;
    overflow: hidden;
    display: block; /* Giữ display là block để có thể chuyển đổi max-height */
    }

    .container_editsp .title {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        margin-left: 10px;
        align-items: center;
        }

    .container_editsp .title p {
    padding-top: 15px;
    }
</style>

<?php
    //nếu $sanpham tồn tại thì extract nó ra
    if (is_array($sanpham)){
        extract($sanpham);
    }

?>

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

<div class="back">
  <a href="index.php?act=sanpham"><i class="fa-solid fa-arrow-left"></i> Danh sách sản phẩm</a>
</div>

<!-- edit sản phẩm -->
<div class="container_editsp">
<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
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
    </div>
    <div class="addsp_container row">
    <div class="container_addspleft col-6">
        <!-- name -->
        <div class="mb-2 p-2">
        <label for="name_sua" class="form-label"
            >Tên sản phẩm</label
        >
        <input
            type="text"
            class="form-control"
            id="name_sua"
            placeholder="Nhập tên sản phẩm"
            value="<?=$name?>"
            
        />
        </div>

        <!-- price -->
        <div class="p-2">
        <label for="last_price_sua" class="form-label">Giá sản phẩm</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="price">$</span>
            <input
            type="text"
            class="form-control"
            placeholder="Nhập giá sản phẩm"
            id="last_price_sua"
            value="<?=$giagoc?>"
            />
            <span class="input-group-text">VNĐ</span>
        </div>
        </div>

        <!-- price sell -->
        <div class="p-2">
        <label for="giaban_sua" class="form-label">Giá bán </label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="price">$</span>
            <input
            type="text"
            class="form-control"
            placeholder="Nhập giá sản phẩm"
            id="giaban_sua"
            value="<?=$giaban?>"
            />
            <span class="input-group-text">VNĐ</span>
        </div>
        </div>

        <!-- discount -->
        <div class="mb-2 p-2">
        <label for="tile_sua" class="form-label">Tỉ lệ giảm giá</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="price">$</span>
            <input
            type="text"
            class="form-control"
            placeholder="ví dụ bạn nhập 5 ,thì giá thật bằng giá sản phẩm trừ đi 5%"
            id="tile_sua"
            style="color: red;"
            value="<?=$tilegiam?>"
            />
            <span class="input-group-text">%</span>
        </div>
        </div>

        <!-- select danh mục cha -->
        <div class="p-2 mb-2">
        <select
            class="form-select"
            aria-label="Default select example"
            id="danhmucsp_sua"
        >
            <option value="" selected disabled>Chọn Danh Mục Cha</option>
                <?php 
                    foreach($listdanhmuc as $ldanhmuc){
                        extract($ldanhmuc);
                        if($iddm==$id) $s="selected"; else $s= "";
                        echo '<option value="' . $id . '" '.$s.'>' . $name . '</option>';
                    }
                ?>
        </select>
        </div>

        <!-- Ảnh sản phẩm -->
         <?php 
            $path_hinh = "../uploads/".$anhsp;
            if (is_file($path_hinh)){
                // $hinh="<img src='".$path_hinh."' height='30'>";
                $hinh = "<div style='float: right; margin: 10px; border-radius: 5px; overflow: hidden;'>
                        <img src='" . $path_hinh . "' height='35' style='border-radius: 5px;'>
                        </div>";
            }
            else{
                $hinh= "no photo";
            }
         ?>
         <?=$hinh?>
        <div class="mb-2 p-2">
        <label for="file_anhsp_sua" class="form-label"
            >Chọn ảnh sản phẩm</label
        >
        <input
            class="form-control"
            type="file"
            id="file_anhsp_sua"            
        />
        </div>

        <!-- Ảnh chi tiết sp -->
        <?php
            if (!empty($anhchitiet)) {
                $anhchitiet_list = explode(",", $anhchitiet); // Tách chuỗi thành mảng
                echo "<div class='image-list' style='float: right; text-align: right;'>"; // Đẩy toàn bộ sang góc phải
                foreach ($anhchitiet_list as $anh) {
                    $path_anhchitiet = "../uploads/" . trim($anh);
                    if (is_file($path_anhchitiet)) {
                        echo "<div style='margin: 10px; display: inline-block;'>
                                <img src='" . $path_anhchitiet . "' height='35' style='border-radius: 5px;'>
                            </div>";
                    }
                }
                echo "</div>";
            } else {
                echo "<div style='float: right;'>Chưa có ảnh chi tiết sản phẩm.</div>";
            }
        ?>
        <div class="mb-3 p-2">
        <label for="chitiet_anhsp_sua" class="form-label"
            >Chọn danh sách ảnh chi tiết sản phẩm</label
        >
        <input
            class="form-control"
            type="file"
            id="chitiet_anhsp_sua"
            multiple
            
        />
        </div>

    </div>
    <!-- Khung bên phải -->
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
            value="<?=$xuatxu?>"
            
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
            value="<?=$tenthuonghieu?>"
            
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
            value="<?=$doituong?>"
            
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
            value="<?=$loaimay?>"
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
            value="<?=$chatlieuday?>"
            
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
            value="<?=$khangnuoc?>"
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
            value="<?=$chatlieukinh?>"
        />
        </div>
            <!-- Nút submit -->
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="d-flex p-2">
            <button type="submit" class="btn btn-success ms-auto" value="1" onclick="return ktform_sua_sp()">
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
    </div>
    </div>

</form>
</div>
>
    <!-- scripbootstrap -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>

<script>
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

//   var fileInput = document.getElementById("file_anhsp_sua");

//   // Kiểm tra xem đã chọn file hay chưa
//   if (fileInput.files.length === 0) {
//     alert("Vui lòng chọn ảnh sản phẩm!");
//     fileInput.focus();
//     return false;
//   }

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

</script>

