<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="/WatchShop/css/css_khach/index.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav>
      <div class="nav_container">
        <div class="logo">
          <!-- <a href="#"><img src="/WatchShop/img/logo.webp" alt="logo" /></a> -->
          <a href="index.php"><p class="logo_xx">WATCHSHOP.VN</p></a> 
        </div>
        <div class="menu">
          <div class="xuhuong">
            <a href="index.php?act=xuhuong">XU HƯỚNG 2024</a>
          </div>
          <div class="nam"><a href="index.php?act=nam">Nam</a></div>
          <div class="nu"><a href="index.php?act=nu">Nữ</a></div>
          <div class="luxury"><a href="index.php?act=luxury">Luxury</a></div>
          <div class="cucaocap"><a href="index.php?act=cucaocap">Cũ Cao Cấp</a></div>
        </div>

        <div class="shopping">
          <!-- gắn link trang giỏ hàng -->
          <a href="index.php?act=giohang">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <title>Giỏ hàng</title>
              <path
                d="M19.5787 6.75H4.42122C4.23665 6.75 4.05856 6.81806 3.92103 6.94115C3.7835 7.06425 3.69619 7.23373 3.67581 7.41718L2.34248 19.4172C2.33083 19.522 2.34143 19.6281 2.37357 19.7286C2.40572 19.829 2.4587 19.9216 2.52904 20.0002C2.59939 20.0788 2.68553 20.1417 2.78182 20.1847C2.87812 20.2278 2.98241 20.25 3.08789 20.25H20.912C21.0175 20.25 21.1218 20.2278 21.2181 20.1847C21.3144 20.1417 21.4005 20.0788 21.4708 20.0002C21.5412 19.9216 21.5942 19.829 21.6263 19.7286C21.6585 19.6281 21.6691 19.522 21.6574 19.4172L20.3241 7.41718C20.3037 7.23373 20.2164 7.06425 20.0789 6.94115C19.9413 6.81806 19.7632 6.75 19.5787 6.75Z"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></path>
              <path
                d="M8.25 9.75V6.75C8.25 5.75544 8.64509 4.80161 9.34835 4.09835C10.0516 3.39509 11.0054 3 12 3C12.9946 3 13.9484 3.39509 14.6517 4.09835C15.3549 4.80161 15.75 5.75544 15.75 6.75V9.75"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></path>
            </svg>
          </a>
        </div>
        <div class="sreach" id="search_cls">
          <input
            type="text"
            class="input"
            placeholder="Tìm là thấy..."
            id="search_text"
          />
          <button class="btn_search" id="btn_search">
            <i
              title="Tìm kiếm sản phẩm"
              class="fa-solid fa-magnifying-glass"
            ></i>
          </button>
        </div>
      </div>
    </nav>
    <!-- end navbar -->