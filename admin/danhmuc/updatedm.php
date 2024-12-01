<style>
          /* khi được select */
        header .main_menu ul li:first-child a {
          color: white;
        }

        .title {
          display: flex;
          gap: 10px;
          margin-top: 80px;
          margin-left: 15%;
        }
        .title p {
          font-size: 1.4rem;
        }

        .back{
          margin-left: 15%;
        }
        .back a{
          text-decoration: none;
          font-size: 1.1rem;
        }
        .container_editsp {
        max-width: 70%;
        max-height: 588px; /* Khởi tạo max-height là 0 */
        background-color: rgb(221, 221, 221);
        margin: 0 auto;
        border-radius: 8px;
        overflow: hidden; /* Đảm bảo không hiển thị phần tử bên ngoài */
        transition: max-height 1s ease, max-width 1s ease; /* Thêm hiệu ứng chuyển đổi */
        margin-top: 40px;
        margin-bottom: 400px;
        } 
</style>


<?php
    //kiểm tra xem có dữ liệu trả về không
    if(is_array($dm)) {
      extract($dm);
    }
?>



<div class="title">
    <div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 576 512"
        width="30px"
        height="30px"
      >
        <path
          fill="#333335"
          d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"
        />
      </svg>
    </div>
    <div>
      <p>Danh mục thể loại</p>
    </div>
  </div>

<div class="back">
  <a href="index.php?act=danhmuc"><i class="fa-solid fa-arrow-left"></i> Danh mục sản phẩm</a>
</div>

<div class="container_editsp">
    <div class="edit_sanpham">
        <form action="index.php?act=updatedm" method="post">
        <div class="title_form">
            <div>
            <p class="p-2 fs-5 fw-bold">Sửa danh mục:</p>
            </div>
            </div>
        </div>
        <div class="mb-3 p-2">
            <label for="exampleFormControlInput1" class="form-label"
            >Tên danh mục:</label
            >
            <input
            type="text"
            class="form-control"
            id="name_edit"
            name="name_edit"
            value="<?php if(isset($dm)&&($dm!="")) echo $name; ?>"
            placeholder="Nhập tên mới"
            />
        </div>
        <div class="p-2">
            <label for="description" class="form-label p-2">Description:</label>
            <textarea
            class="form-control"
            id="ghichu_edit"
            name="ghichu_edit"
            rows="3"
            ><?php if(isset($dm)&&($dm!="")) echo $ghichu; ?></textarea>
        </div>
        <!-- input hidden để lấy id gửi về index -->
        <input type="hidden" name="id" value="<?php if(isset($dm)&&($dm!="")) echo $id; ?>">
        <div class="p-2 mb-2 mt-3">
            <button type="submit" name="edit_sp" value="1" onclick="return kiemtraform_edit()" class="btn btn-success">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                width="15px"
                hight="15px"
                fill="black"
            >
                <path
                fill="white"
                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"
                />
            </svg>
            Save Edit
            </button>
        </div>
        </form>
        
    </div>
</div>


<script>
    function kiemtraform_edit() {
        var name = document.getElementById("name_edit");
        if (name.value == "") {
            alert("Vui lòng nhập tên mới");
            name.focus();
            return false;
        }

        var ghichu = document.getElementById("ghichu_edit");
        if (ghichu.value == "") {
            alert("Vui lòng nhập ghi chú");
            ghichu.focus();
            return false;
        }

        return true;
        }
</script>

