<style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      .container_timkiem {
        width: 100%;
        height: auto;
        /* background-color: #fcd7d7; */
      }

      .result {
        margin-left: 18%;
        padding: 20px;
        font-weight: bolder;
      }

      .container_splq {
        width: 63%;
        height: auto;
        /* background-color: cadetblue; */
        margin: 0 auto;
        border-radius: 8px;
        display: flex;
        flex-wrap: wrap; /*Cho phép xuống dòng nếu quá chiều rộng*/
      }

      .container_splq .card {
        width: 280px;
        height: 430px;
        background-color: white;
        margin-left: 10px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 10px;
        border: 1px solid gainsboro;
        transition: box-shadow 0.3s ease; /* set time cho hiệu ứng đổ bóng*/
      }

      .container_splq .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Đổ bóng */
      }

      .container_splq .content_card {
        margin-left: 10px;
      }

      .container_splq .card img {
        width: auto;
        height: 270px;
        object-fit: contain;
      }

      .container_splq .card .name {
        text-align: center;
        margin-top: 10px;
      }

      .container_splq .card .name a {
        text-decoration: none;
        color: black;
      }

      .card .price {
        color: #ed1c24;
        font-weight: bolder;
        margin-top: 10px;
      }

      .card .last_price {
        margin-top: 10px;
        display: flex;
        gap: 20px;
        align-items: center;
      }

      .last_price .number_price {
        text-decoration: line-through;
        color: rgb(150, 150, 150);
      }

      .last_price .percent {
        background-color: #fcd7d7;
        border-radius: 5px;
        padding: 2px;
        color: red;
        font-size: 0.8rem;
      }

      .evaluate {
        margin-top: 10px;
      }
</style>

    <div class="container_timkiem">
      <div class="result">Tìm thấy <?php echo $soluong; ?> sản phẩm cho từ khóa: <?php echo $kyw ?></div>
        <div class="container_splq">
        <?php
        if (!empty($list_search) && is_array($list_search)){
            foreach($list_search as $sanpham){
            extract($sanpham);
            $path_anh = "./uploads/".$anhsp;
            $chitietsp= "index.php?act=chitietsanpham&id=".$id;
            echo'
                 <div class="card">
                    <!-- img card -->
                    <div class="img">
                        <img src="'.$path_anh.'" alt="Ảnh đồng hồ" />
                    </div>
                    <!-- content -->
                    <div class="content_card">
                        <div class="name">
                        <a href="'.$chitietsp.'">'.$name.'</a>
                        </div>
                            <div class="price">'. number_format($giaban, 0, ',', '.') .' đ</div>
                        <div class="last_price">
                            <div class="number_price">' . number_format($giagoc, 0, ',', '.') . 'đ</div>
                        <div class="percent">-'.$tilegiam.'%</div>
                        </div>

                        <div class="evaluate">
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    </div>
                </div>
            </div>
                ';
            }
        } else{
            echo "Không có sản phẩm !!";
        }
        ?>

        </div>
    </div>