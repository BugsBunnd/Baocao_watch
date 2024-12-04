
    <!-- carosel -->
    <div class="carosel">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="3000"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/WatchShop/img_carosel/banner1.webp"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="/WatchShop/img_carosel/banner2.webp"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="/WatchShop/img_carosel/banner3.webp"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="/WatchShop/img_carosel/banner4.webp"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- end carosel -->

    <!-- container guarantee -->
    <div class="container_item">
      <div class="item">
        <div class="item_left">
          <img src="/WatchShop/img/watch.png" alt="" />
        </div>
        <div class="item_right">
          <p class="title">Mẫu mã đa dạng</p>
          <p class="content">Hoàn tiền nếu phát hiện hàng giả</p>
        </div>
      </div>

      <div class="item">
        <div class="item_left">
          <img src="/WatchShop/img/rocket.png" alt="" />
        </div>
        <div class="item_right">
          <p class="title">Miễn phí vẫn chuyển</p>
          <p class="content">Giao hàng nhanh đóng gói cẩn thận</p>
        </div>
      </div>

      <div class="item">
        <div class="item_left">
          <img src="/WatchShop/img/loading.png" alt="" />
        </div>
        <div class="item_right">
          <p class="title">Đổi hàng 30 ngày</p>
          <p class="content">1 đổi 1 trong 30 ngày nếu sản phẩm lỗi</p>
        </div>
      </div>

      <div class="item">
        <div class="item_left">
          <img src="/WatchShop/img/guarantee.png" alt="" />
        </div>
        <div class="item_right">
          <p class="title">Bảo hành 5 năm</p>
          <p class="content">Thu tục nhanh gọn, bảo dưỡng miễn phí</p>
        </div>
      </div>

      <div class="item">
        <div class="item_left">
          <img src="/WatchShop/img/high-quality.png" alt="" />
        </div>
        <div class="item_right">
          <p class="title">Đeo trước trả sau</p>
          <p class="content">Trả trước 1 phần 2 phần còn lại trả sau</p>
        </div>
      </div>
    </div>
    <!-- end container guarantee -->

    <!-- main-product -->
    <div class="container">
      <div class="baner mb-3"><img src="/WatchShop/img/banner.jpg" alt="baner" /></div>
      <?php
      if (!empty($listsanpham) && is_array($listsanpham)){
        foreach($listsanpham as $sanpham){
          extract($sanpham);
          $path_anh = "./uploads/".$anhsp;
          $chitietsp= "index.php?act=chitietsanpham&id=".$id;
          echo'
              <div class="mega_box mrtop_10px">
                <div class="box">
                  <img src="'.$path_anh.'" alt="Ảnh sản phẩm" />
                  <p class="describe">
                    <a href="'.$chitietsp.'">'.$name.'</a>
                  </p>
                  <p class="price">'.$giaban.' VNĐ</p>
                  <p class="last_price">
                    <span class="price_last">'.$giagoc.' VNĐ</span>
                    <span class="rate_down">-'.$tilegiam.'%</span>
                  </p>

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
    <!-- end main -->

    <!-- Đánh giá  -->
    <div class="container_danhgia">
          <div class="content_left">
            <div class="title_danhgia">Đánh giá của khách hàng</div>
            <div class="content">
              WatchShop tự hào là website có lượng đánh <br />giá thật tích cực
              nhiều nhất trong ngành bán lẻ đồng hồ Việt Nam
            </div>
            <div class="icon">
              <script
                src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                type="module"
              ></script>
    
              <dotlottie-player
                src="https://lottie.host/5dd662b0-5c35-4ee3-a843-5a744653f424/zAyL0Hoztl.json"
                background="transparent"
                speed="1"
                style="width: 300px; height: 30px"
                loop
                autoplay
              ></dotlottie-player>
            </div>
            <!-- thêm link đánh giá -->
            <div class="link_danhgia"><a href="#">Xem thêm 1000 đánh giá</a></div>
          </div>
          <div class="content_right">
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Dịch vụ tuyệt vời, nhân viên tận tâm hỗ trợ nhiệt tình, rất đáng
                    tin cậy.
                  </p>
                </div>
              </div>
              <div class="name">Nguyễn Văn An</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Tôi thực sự ấn tượng với chất lượng dịch vụ ở đây. Nhân viên rất
                    nhiệt tình, chu đáo và thân thiện. Mọi thắc mắc của tôi đều được
                    giải đáp tận tình, sản phẩm cũng rất tốt, đúng như mô tả. Chắc
                    chắn tôi sẽ quay lại ủng hộ và giới thiệu cho bạn bè.
                  </p>
                </div>
              </div>
              <div class="name">Trần Thị Bích</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Sản phẩm chất lượng, đúng như mô tả, tôi rất hài lòng với trải
                    nghiệm.
                  </p>
                </div>
              </div>
              <div class="name">Lê Quang Hùng</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Dịch vụ khách hàng tốt, chăm sóc chu đáo và tận tình với từng
                    chi tiết.
                  </p>
                </div>
              </div>
              <div class="name">Phạm Thị Hoa</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Đội ngũ chuyên nghiệp và làm việc nhanh chóng, sẽ giới thiệu cho
                    bạn bè!
                  </p>
                </div>
              </div>
              <div class="name">Đỗ Minh Tuấn</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Thái độ phục vụ rất tốt, luôn sẵn sàng giải đáp mọi thắc mắc.
                  </p>
                </div>
              </div>
              <div class="name">Trần Hoài Linh</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Dịch vụ rất chuyên nghiệp, nhân viên thân thiện và hỗ trợ tận
                    tình. Rất hài lòng!
                  </p>
                </div>
              </div>
              <div class="name">Ngọc Anh</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>
                    Lần đầu tiên trải nghiệm mà cảm thấy rất hài lòng. Dịch vụ không
                    có gì chê!
                  </p>
                </div>
              </div>
              <div class="name">Xuân Quý</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
    
            <div>
              <div class="box">
                <div class="card">
                  <p>Hàng mới đẹp</p>
                </div>
              </div>
              <div class="name">Nguyễn Nam</div>
              <div class="sticker">
                <i class="fa-solid fa-circle-check" style="color: #00a651"></i> Đã
                mua hàng
              </div>
            </div>
          </div>
    </div>
    <!-- End Đánh giá -->