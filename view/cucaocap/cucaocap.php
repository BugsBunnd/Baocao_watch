<body>
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
        gap: 10px;
        display: flex;
      }
      .danhmuc {
        color: #2f80ed;
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
      .cucaocap a {
        color: red; 
      }
    </style>
    <div class="container_timkiem">
      <div class="result">
        <!-- icon home -->
        <div class="icon">
          <svg
            width="14"
            height="14"
            viewBox="0 0 12 12"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7.31218 10.3746V7.74953C7.31218 7.6335 7.26609 7.52222 7.18404 7.44017C7.10199 7.35812 6.99071 7.31203 6.87468 7.31203H5.12468C5.00865 7.31203 4.89737 7.35812 4.81532 7.44017C4.73327 7.52222 4.68718 7.6335 4.68718 7.74953V10.3746C4.68718 10.4906 4.64109 10.6019 4.55906 10.6839C4.47702 10.766 4.36576 10.8121 4.24973 10.8121L1.62505 10.8124C1.5676 10.8124 1.5107 10.8011 1.45761 10.7791C1.40453 10.7572 1.35629 10.7249 1.31566 10.6843C1.27503 10.6437 1.2428 10.5955 1.22081 10.5424C1.19882 10.4893 1.1875 10.4324 1.1875 10.3749V5.3185C1.1875 5.25755 1.20024 5.19727 1.22489 5.14153C1.24955 5.08579 1.28558 5.03581 1.33068 4.9948L5.70538 1.01712C5.78591 0.943899 5.89084 0.903324 5.99968 0.90332C6.10853 0.903317 6.21346 0.943885 6.294 1.0171L10.6693 4.9948C10.7144 5.03581 10.7504 5.08579 10.7751 5.14153C10.7998 5.19728 10.8125 5.25756 10.8125 5.31852V10.3749C10.8125 10.4324 10.8012 10.4893 10.7792 10.5424C10.7572 10.5955 10.725 10.6437 10.6843 10.6843C10.6437 10.7249 10.5955 10.7572 10.5424 10.7791C10.4893 10.8011 10.4324 10.8124 10.3749 10.8124L7.74962 10.8121C7.6336 10.8121 7.52234 10.766 7.4403 10.6839C7.35826 10.6019 7.31218 10.4906 7.31218 10.3746V10.3746Z"
              stroke="#175CD3"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></path>
          </svg>
        </div>
        <div>
          <i class="fa fa-angle-right" style="color: gray; font-size: 13px"></i>
        </div>
        <div class="danhmuc">Cũ cao cấp</div>
      </div>
      <div class="container_splq">
      <?php
        

        if (!empty($list_cucapcap) && is_array($list_cucapcap)){
            foreach($list_cucapcap as $sanpham){
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
                            <div class="price">'. number_format($giaban, 0, ',', '.') .' VNĐ</div>
                        <div class="last_price">
                            <div class="number_price">' . number_format($giagoc, 0, ',', '.') . 'VNĐ</div>
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