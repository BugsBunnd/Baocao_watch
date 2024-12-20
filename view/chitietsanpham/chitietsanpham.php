<?php
    if(isset($sanpham)&& is_array($sanpham)){
        extract($sanpham);
    }

?>

<link rel="stylesheet" href="/WatchShop/css/css_khach/chitietsanpham.css">

<div class="main_product">


    <div class="link_logic">
    <div class="trangchu">
        <a href="index.php">
        <!-- icon trang chủ -->
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
        </a>
    </div>
    <!-- icon > -->
    <div>
        <i class="fa fa-angle-right" style="color: gray; font-size: 13px"></i>
    </div>
    <!-- Trang đích -->
    <div class="trangdich">
        <p>Nam cá tính</p>
    </div>
    </div>

    <div class="namesp">
    <div class="name">
        <p><?=$name?></p>
    </div>
    <!-- ngôi sao đánh giá -->
    <div class="danhgia">
        <i class="fa-solid fa-star" style="color: orange"></i>
        <i class="fa-solid fa-star" style="color: orange"></i>
        <i class="fa-solid fa-star" style="color: orange"></i>
        <i class="fa-solid fa-star" style="color: orange"></i>
        <i class="fa-solid fa-star" style="color: orange"></i>
    </div>
    </div>

    <!-- get link anh ra -->
    <?php
        $path_anh_sp = "/WatchShop/uploads/".$anhsp;

        $anh_chitiet_array = explode(",", $anhchitiet);
        // Kiểm tra và lấy 3 ảnh chi tiết
        if (isset($anh_chitiet_array[0])) {
            $path_anh_ct1 = "/WatchShop/uploads/" . $anh_chitiet_array[0];
        }
        if (isset($anh_chitiet_array[1])) {
            $path_anh_ct2 = "/WatchShop/uploads/" . $anh_chitiet_array[1];
        }
        if (isset($anh_chitiet_array[2])) {
            $path_anh_ct3 = "/WatchShop/uploads/" . $anh_chitiet_array[2];
        }
        
    ?>

    <div class="main_content row">
    <!-- carosel -->
    <div class="ctn_carosel col-6 ms-4">
        <div class="carosel">
        <div id="carouselExampleIndicators" class="carousel slide">
            <!-- Nút chỉ báo tiến trình -->
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="3"
                    aria-label="Slide 4"
                ></button>
            </div>

            <!-- Hình ảnh carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                    src="<?=$path_anh_sp?>"
                    class="d-block w-100"
                    alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                    src="<?=$path_anh_ct1?>"
                    class="d-block w-100"
                    alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                    src="<?=$path_anh_ct2?>"
                    class="d-block w-100"
                    alt="..."
                    />
                </div>
                <div class="carousel-item">
                    <img
                    src="<?=$path_anh_ct3?>"
                    class="d-block w-100"
                    alt="..."
                    />
                </div>
            </div>

            <!-- Nút điều hướng -->
            <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
            >
            <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
            >
            <span
                class="carousel-control-next-icon"
                aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </div>

    <!-- Thông tin giá cả -->
    <div class="info_product col-6">
        <div class="ctn_price">
        <div class="price_sanpham"><?= $giaban ?> <span>₫</span></div>
        <div class="last_price_sanpham"><?= $giagoc ?> <span>₫</span></div>
        <div class="percent">- <?= $tilegiam ?>%</div>
        </div>
        <div class="xuatxu">
        <p>
            Chính hãng từ: <span id="thuonghieu"><?= $tenthuonghieu ?></span> - Xuất xứ:
            <span id="xuatxu"><?= $xuatxu ?></span>
        </p>
        </div>

        <!-- button mua luôn -->
         <form action="index.php?act=giohang" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="anhsp" value="<?=$anhsp?>">
            <input type="hidden" name="giaban" value="<?=$giaban?>">
            <input type="hidden" name="giagoc" value="<?=$giagoc?>">


            <div class="btn_mua d-flex">
            <button
                type="submit"
                class="btn btn-primary btn-lg w-50 py-2"
                style="font-size: 14px"
                name="muangay"
            >
                Mua ngay Free-ship <br />
                Kiểm tra hàng trước khi thanh toán
            </button>
            <button
                type="submit"
                class="btn btn-outline-primary btn-lg w-50 py-2 ms-2 color-btn_hover"
                name="muangay"
                style="
                font-size: 14px;
                color: blue;
                background-color: rgb(255, 255, 255);
                "
            >
                <b>Thanh toán qua ATM</b> <br />
                Giao hàng siêu tốc - hỗ trợ <br />kiểm hàng tại chổ
            </button>
            </div>
        </form>

        <!-- call mua hàng -->
        <div>
        <p class="text-center mt-3 call">
            <b>Gọi mua hàng: <span>0939393939 - 0777788889</span></b>
        </p>
        </div>

        <!-- cam kết -->
        <div class="camket">
        <div class="tieude">CAM KẾT CỦA WATCHSHOP.VN</div>
        <div class="grid text-center ctncamket_content">
            <div class="row g-3">
            <div class="col-6">
                <div class="icon">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M16.799 10.2302L16.6861 10.3379L16.799 10.2302ZM16.799 10.2302H16.7808C16.8154 10.1831 16.8449 10.1323 16.8687 10.0786C16.9119 9.98092 16.9355 9.87572 16.938 9.76898C16.9406 9.66223 16.9221 9.55603 16.8836 9.45643C16.845 9.35684 16.7873 9.26582 16.7136 9.18857C16.6399 9.11131 16.5516 9.04934 16.454 9.0062C16.3563 8.96305 16.2511 8.93958 16.1443 8.93712C16.0376 8.93466 15.9314 8.95327 15.8318 8.99187C15.7323 9.03047 15.6413 9.08832 15.5641 9.16209L10.6247 13.8765L8.43615 11.7871C8.43614 11.7871 8.43613 11.7871 8.43612 11.7871C8.35894 11.7133 8.26797 11.6555 8.16843 11.6169C8.06887 11.5783 7.96269 11.5597 7.85594 11.5621C7.74919 11.5646 7.64397 11.5881 7.5463 11.6312C7.44863 11.6743 7.36041 11.7363 7.28671 11.8136C7.213 11.8908 7.15523 11.9818 7.11672 12.0814C7.07821 12.181 7.0597 12.2872 7.06226 12.394C7.06481 12.5007 7.08838 12.6059 7.13161 12.7036C7.17484 12.8012 7.23689 12.8893 7.31421 12.963L10.0637 15.5879L10.0637 15.588C10.2149 15.7321 10.4158 15.8125 10.6246 15.8125C10.8335 15.8125 11.0344 15.7321 11.1856 15.588L11.1856 15.5879L16.6861 10.338L16.799 10.2302ZM11.5544 22.331L11.554 22.3308C10.1314 21.8595 3.06264 19.0922 3.06264 10.7498V5.25004C3.06314 4.86894 3.21476 4.50359 3.48424 4.23411C3.75373 3.96461 4.1191 3.813 4.50022 3.8125L19.5001 3.8125C19.8812 3.81301 20.2465 3.96462 20.516 4.23411C20.7855 4.5036 20.9371 4.86896 20.9376 5.25008V10.7498C20.9376 19.0929 13.8682 21.8595 12.4463 22.3308L12.4459 22.331C12.1568 22.4291 11.8435 22.4291 11.5544 22.331Z"
                    fill="#FDAF17"
                    stroke="#FDAF17"
                    stroke-width="0.125"
                    ></path>
                </svg>
                </div>
                <div>Bảo hành đổi máy 10 năm toàn quốc thủ tục nhanh gọn</div>
            </div>
            <div class="col-6">
                <div class="icon">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M17.3475 17.3472L17.3474 17.3472C15.9281 18.7634 14.005 19.5588 12 19.5588C9.995 19.5588 8.07188 18.7634 6.65257 17.3472L6.65252 17.3472L6.25088 16.9455L6.20669 16.9013L6.25088 16.8571L7.97051 15.1375C7.97051 15.1375 7.97051 15.1375 7.97051 15.1375C8.06665 15.0413 8.13211 14.9188 8.15863 14.7855C8.18514 14.6521 8.17152 14.5139 8.11949 14.3883C8.06745 14.2626 7.97934 14.1553 7.86628 14.0797C7.75323 14.0042 7.62031 13.9639 7.48434 13.9638H2.98434C2.80201 13.9638 2.62715 14.0363 2.49822 14.1652C2.36929 14.2941 2.29685 14.469 2.29684 14.6513V19.1513C2.29685 19.2873 2.33718 19.4202 2.41273 19.5333C2.48827 19.6463 2.59565 19.7345 2.72127 19.7865L2.69735 19.8442L2.72127 19.7865C2.84689 19.8385 2.98513 19.8522 3.11849 19.8256C3.25186 19.7991 3.37436 19.7336 3.47052 19.6375L5.19015 17.9179L5.23434 17.8737L5.27854 17.9179L5.68013 18.3195L17.3475 17.3472ZM17.3475 17.3472C17.4113 17.2833 17.4871 17.2327 17.5705 17.1981C17.6539 17.1636 17.7434 17.1458 17.8336 17.1458C17.9239 17.1458 18.0133 17.1636 18.0968 17.1981C18.1802 17.2327 18.256 17.2833 18.3198 17.3472C18.3837 17.411 18.4343 17.4868 18.4689 17.5702C18.5034 17.6536 18.5212 17.7431 18.5212 17.8333C18.5212 17.9236 18.5034 18.013 18.4689 18.0965C18.4343 18.1799 18.3837 18.2556 18.3199 18.3195C16.6424 19.9931 14.3696 20.933 12 20.933C9.63045 20.933 7.35764 19.9931 5.68018 18.3195L17.3475 17.3472ZM17.7491 7.14225L17.7933 7.09805L17.7491 7.05386L17.3475 6.65222L17.3474 6.65217C15.9281 5.23598 14.005 4.44063 12 4.44063C9.995 4.44063 8.07188 5.23598 6.65257 6.65217L6.65252 6.65222C6.58868 6.71606 6.51288 6.76671 6.42947 6.80126C6.34605 6.83581 6.25664 6.8536 6.16635 6.8536C6.07606 6.8536 5.98666 6.83581 5.90324 6.80126C5.81982 6.76671 5.74403 6.71606 5.68018 6.65222C5.55124 6.52328 5.4788 6.3484 5.4788 6.16605C5.4788 6.07576 5.49659 5.98635 5.53114 5.90293C5.56568 5.81954 5.61631 5.74376 5.68013 5.67993C7.3576 4.00631 9.63042 3.06641 12 3.06641C14.3696 3.06641 16.6424 4.00631 18.3199 5.67993L18.7215 6.08152L18.7657 6.12571L18.8098 6.08152L20.5295 4.36188C20.6256 4.26575 20.7481 4.20029 20.8815 4.17377C21.0149 4.14725 21.1531 4.16087 21.2787 4.21291C21.4043 4.26495 21.5117 4.35306 21.5873 4.46612C21.6628 4.57917 21.7031 4.71209 21.7032 4.84805V9.34805C21.7031 9.53038 21.6307 9.70525 21.5018 9.83418C21.3729 9.96311 21.198 10.0355 21.0157 10.0356H16.5157C16.3797 10.0355 16.2468 9.99521 16.1337 9.91966C16.0207 9.84411 15.9326 9.73674 15.8805 9.61112C15.8285 9.4855 15.8149 9.34727 15.8414 9.2139C15.8679 9.08054 15.9334 8.95804 16.0295 8.86188C16.0295 8.86188 16.0295 8.86188 16.0295 8.86188L17.7491 7.14225Z"
                    fill="#FDAF17"
                    stroke="#FDAF17"
                    stroke-width="0.125"
                    ></path>
                </svg>
                </div>
                <div>Không bán hàng fake, chỉ bán hàng chính hãng</div>
            </div>
            <div class="col-6">
                <div class="icon">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 20 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M19.5005 5.66855L19.5005 5.66854C19.4987 5.6651 19.4971 5.66166 19.4961 5.65972L19.4958 5.65911L19.4947 5.65676C19.494 5.65571 19.4926 5.65359 19.4912 5.65123L19.4912 5.65118C19.3625 5.43045 19.1773 5.24804 18.9547 5.12276L10.705 0.482237C10.7049 0.482222 10.7049 0.482208 10.7049 0.482193C10.4894 0.361951 10.2468 0.298828 10 0.298828C9.75328 0.298828 9.51064 0.361946 9.29518 0.482178C9.29515 0.482198 9.29511 0.482217 9.29508 0.482237L1.04519 5.12279C0.821703 5.24866 0.63598 5.43206 0.507307 5.65395L0.45324 5.62259M19.5005 5.66855L0.503186 5.66047L0.503327 5.66034C0.503984 5.65934 0.505762 5.65664 0.507464 5.65368L0.45324 5.62259M19.5005 5.66855L19.5013 5.66986M19.5005 5.66855L19.5013 5.66986M0.45324 5.62259C0.452559 5.62378 0.451813 5.62492 0.451065 5.62606C0.450228 5.62733 0.449389 5.62861 0.448639 5.62996M0.45324 5.62259C0.58751 5.39106 0.781311 5.19968 1.01452 5.06833L0.448639 5.62996M0.448639 5.62996C0.447398 5.63217 0.446345 5.63444 0.445291 5.6367C0.444401 5.63862 0.44351 5.64053 0.442505 5.64242L0.448639 5.62996ZM0.312469 6.37569L0.312469 15.6234C0.312668 15.8784 0.380626 16.1288 0.509389 16.349C0.638145 16.5691 0.823075 16.7511 1.04526 16.8763L0.312469 6.37569ZM0.312469 6.37569C0.312725 6.12954 0.37626 5.88759 0.496973 5.67307L0.496987 5.67307L0.497654 5.67182C0.499525 5.66831 0.50114 5.66483 0.501958 5.66307L0.502192 5.66256C0.502806 5.66125 0.503116 5.6607 0.503198 5.66053L0.312469 6.37569ZM19.5013 5.66986C19.6231 5.88517 19.6873 6.12832 19.6875 6.37572V15.6234C19.6873 15.8784 19.6194 16.1288 19.4906 16.349C19.3618 16.5692 19.1769 16.7511 18.9546 16.8763L10.7048 21.5169L19.5013 5.66986ZM9.94783 21.6986L9.94783 21.6987C9.9505 21.6989 9.95309 21.6991 9.9556 21.6993C9.97014 21.7004 9.98226 21.7014 9.9947 21.7015H10.0012C10.0224 21.7015 10.0437 21.7003 10.0653 21.6983L10.0684 21.698L10.0684 21.6981C10.2917 21.6881 10.5096 21.6261 10.7047 21.5169L9.94783 21.6986ZM9.94783 21.6986L9.94517 21.6985M9.94783 21.6986L9.94517 21.6985M9.94517 21.6985C9.71722 21.6905 9.49446 21.6283 9.29535 21.517L9.94517 21.6985ZM9.29521 21.5169L1.0453 16.8763L9.29521 21.5169ZM10.0306 1.68056L9.99997 1.66333L9.96933 1.68056L7.01057 3.34485L6.91277 3.39987L7.01103 3.45406L14.5751 7.62589L14.6057 7.64279L14.6361 7.6255L17.5068 5.99463L17.6029 5.94002L17.5066 5.88581L10.0306 1.68056ZM10.0549 10.1936L10.0856 10.2107L10.1162 10.1934L13.1062 8.4947L13.2033 8.43955L13.1055 8.38563L5.53377 4.20954L5.50328 4.19273L5.47294 4.2098L2.50485 5.87935L2.40753 5.9341L2.50508 5.98843L10.0549 10.1936ZM10.6989 19.8352L10.6979 19.9431L10.792 19.8902L18.2806 15.6779L18.3125 15.66V15.6234V7.22573V7.11834L18.2191 7.17139L15.3149 8.82126L15.2833 8.83923V8.8756V13.2974C15.2833 13.4797 15.2109 13.6546 15.082 13.7835C14.953 13.9125 14.7782 13.9849 14.5958 13.9849C14.4135 13.9849 14.2386 13.9125 14.1097 13.7835C13.9808 13.6546 13.9083 13.4798 13.9083 13.2974V9.72777V9.62038L13.8149 9.67343L10.8043 11.3839L10.773 11.4017L10.7727 11.4377L10.6989 19.8352Z"
                    fill="#FDAF17"
                    stroke="#FDAF17"
                    stroke-width="0.125"
                    ></path>
                </svg>
                </div>
                <div>Sẵn hàng - quay chụp hình thực tế gửi khách xem</div>
            </div>
            <div class="col-6">
                <div class="icon">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M14.937 6.8125V6.75V5.25007C14.9358 4.27241 14.547 3.3351 13.8557 2.64379C13.1644 1.95249 12.2271 1.56363 11.2494 1.5625C11.1218 1.56249 10.9966 1.59804 10.888 1.66517C10.7794 1.73229 10.6916 1.82834 10.6345 1.94254L10.5786 1.9146L10.6345 1.94255L7.09182 9.02795L7.07455 9.0625H7.03592H2.99952C2.61839 9.06294 2.25299 9.21453 1.98349 9.48404C1.71399 9.75353 1.5624 10.1189 1.56195 10.5L1.56195 18.7499C1.56239 19.1311 1.71398 19.4965 1.98349 19.766C2.25299 20.0355 2.61839 20.1871 2.99952 20.1875H18.9251C19.4581 20.1867 19.9726 19.9917 20.3722 19.639C20.7717 19.2863 21.029 18.8001 21.0959 18.2713L14.937 6.8125ZM14.937 6.8125H14.9995H20.0502C20.3604 6.81256 20.667 6.87855 20.9497 7.00609C21.2324 7.13362 21.4848 7.3198 21.6902 7.55227C21.8954 7.78484 22.0488 8.05837 22.1403 8.35473C22.2318 8.6511 22.2593 8.96353 22.2209 9.2713L21.0959 18.2712L14.937 6.8125ZM2.99945 10.4375H2.93695V10.5V18.75V18.8125H2.99945H6.74945H6.81195V18.75V10.5V10.4375H6.74945H2.99945Z"
                    fill="#FDAF17"
                    stroke="#FDAF17"
                    stroke-width="0.125"
                    ></path>
                </svg>
                </div>
                <div>Freeship toàn quốc thanh toán khi nhận hàng</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="container_ttbh">
    <div class="thongso mt-4 ms-0">
            <!-- Các nút bấm -->
            <button
            class="btn btn-option active"
            id="btn-product-details"
            onclick="selectButton('btn-product-details', 'content-product-details')"
            >
            Chi tiết sản phẩm
            </button>
            <button
            class="btn btn-option"
            id="btn-warranty-policy"
            onclick="selectButton('btn-warranty-policy', 'content-warranty-policy')"
            >
            Chính sách bảo hành
            </button>
            <button
            class="btn btn-option"
            id="btn-size-guide"
            onclick="selectButton('btn-size-guide', 'content-size-guide')"
            >
            Hướng dẫn chọn size
            </button>

            <!-- Khung Collapse -->
            <div id="sharedCollapse" class="collapse_chitiet show ms-0">
            <div class="card card-body">
                <!-- Nội dung được định nghĩa sẵn trong HTML -->
                <div id="content-product-details" class="active content">
                <h5>Thông số sản phẩm - <?= $name ?></h5>
                <div class="table_thongso">
                    <table>
                    <tr>
                        <td><b>Thương hiệu: </b><?= $tenthuonghieu ?></td>
                        <td><b>Xuất xứ: </b><?= $xuatxu ?></td>
                    </tr>
                    <tr>
                        <td><b>Đối tượng: </b><?= $doituong ?></td>
                        <td><b>Kháng nước: </b><?= $khangnuoc ?></td>
                    </tr>
                    <tr>
                        <td><b>Loại máy: </b><?= $loaimay ?></td>
                        <td><b>Chất liệu kính: </b><?= $chatlieukinh ?></td>
                    </tr>
                    <tr>
                        <td><b>Chất liệu dây: </b><?= $chatlieuday ?></td>
                        <td><b>Size mặt: </b>40.8mm</td>
                    </tr>
                    <tr>
                        <td><b>Độ dày: </b>11mm</td>
                        <td><b>Khoảng trữ cót: </b>40 tiếng</td>
                    </tr>
                    <tr>
                        <td><b>Tiện ích: </b>Dạ quang, Giờ, Phút, Smaill Second</td>
                        <td></td>
                    </tr>
                    </table>
                </div>
                </div>
                <div id="content-warranty-policy" class="content">
                <div class="baohanh">
                    <p>
                    Đồng hồ chính hãng khác với đồng hồ Fake ở chỗ là nó luôn đi
                    kèm với 1 chiếc THẺ hoặc 1 SỔ BẢO HÀNH toàn cầu có giá trị bảo
                    hành theo từng thời gian quy định của từng hãng. THẺ hoặc SỔ
                    BẢO HÀNH chính thức này được WatchShop ghi đầy đủ và chính xác
                    các thông tin của đồng hồ như: mã đồng hồ, nơi bán, ngày mua
                    hàng. Thời gian bảo hành được tính từ ngày mua hàng được ghi
                    trên THẺ hoặc SỔ BẢO HÀNH.
                    </p>
                    <p style="font-size: 1rem"><b>DUY NHẤT TẠI WATCHSHOP</b></p>
                    <p>
                    1: Bạn sẽ được <b>bảo hành trọn gói 10 năm </b> tính từ ngày
                    mua tại WatchShop, (đã bao gồm cả thời gian bảo hành quốc tế
                    của từng hãng). 2: WatchShop.vn sẽ không có bất cứ quy định
                    khắt khe và không thu bất cứ khoản phí nào trong suốt 5 năm
                    bảo hành, đồng hồ của bạn có bất cứ lỗi nào từ nhà sản xuất
                    bạn mang qua sẽ được bảo hành.
                    </p>
                    <p>
                    2: WatchShop.vn sẽ không có bất cứ quy định khắt khe và không
                    thu bất cứ khoản phí nào trong suốt 10 năm bảo hành, đồng hồ
                    của bạn có bất cứ lỗi nào từ nhà sản xuất bạn mang qua sẽ được
                    bảo hành.
                    </p>
                    <p style="font-size: 1rem"><b>ĐIỀU KIỆN BẢO HÀNH</b></p>
                    <p>
                    1: WatchShop.vn sẽ chỉ bảo hành miễn phí cho các lỗi của nhà
                    sản xuất như: hư hỏng các linh kiện bên trong của đồng hồ, có
                    thể được đổi sang 1 chiếc đồng hồ mới (trong vòng 7 ngày tính
                    từ ngày nhận hàng) tuỳ theo mức độ hỏng hóc của linh kiện.
                    </p>
                    <p>
                    2: Ngoài ra Pin của đồng hồ bạn mua tại hệ thống của
                    WatchShop.vn sẽ được thay thế miễn phí và lau dầu cũng miễn
                    phí trong suốt thời gian bảo hành (không áp dụng pin năng
                    lượng từ ánh sáng (Eco-Drive), loại pin này sẽ áp dụng theo
                    các chính sách bảo hành kèm theo của hãng). Riêng đồng hồ
                    Casio sẽ được miễn phí thay pin trọn đời.
                    </p>
                    <p>
                    3: WatchShop.vn chỉ chấp nhận bảo hành khi bạn còn giữ THẺ
                    hoặc SỔ BẢO HÀNH liên quan tới chiếc đồng hồ của bạn.
                    </p>
                    <p style="font-size: 1rem"><b>KHÔNG BẢO HÀNH</b></p>
                    <p>
                    1. Không bảo hành dây, vỏ vì các bộ phận bên ngoài này sẽ bị
                    hao mòn và lão hoá theo thời gian ví dụ như: vỏ máy bị móp méo
                    do va đập, bị trầy xước, phai màu, bong tróc, nứt vỡ, hỏng
                    khoá dây.
                    <br /><br />2. Không bảo hành cho những hậu quả gián tiếp của
                    việc sử dụng không đúng cách của người sử dụng như: đeo đồng
                    hồ trong khi xông hơi, tắm nước nóng, để đồng hồ tiếp xúc với
                    các loại hóa chất, axít, chất tẩy rửa có độ ăn mòn cao…<br /><br />3.
                    Không bảo hành cho những đồng hồ đã bị sửa chữa tại những nơi
                    không phải là trung tâm bảo hành được các hãng đồng hồ ủy
                    quyền chính thức hoặc tại WatchShop.vn, đặc biệt trường hợp
                    kháchh tự sửa chữa sẽ từ chối bảo hành ngay lập tức.
                    <br /><br />4. Không bảo hành cho đồng hồ bị hư hỏng do ảnh
                    hưởng của thiên tai, hỏa hoạn, lũ lụt, tai nạn hoặc cố tình
                    gây hư hỏng.
                    </p>
                </div>
                </div>
                <div id="content-size-guide" class="content">
                <p>
                    Sở thích của mỗi người là khác nhau, có người tay nhỏ nhưng lại
                    thích đeo đồng hồ size to, có người tay to nhưng lại thích đeo
                    đồng hồ size nhỏ, nhưng để đeo 1 chiếc đồng hồ mang tính thẩm mỹ
                    nhất thì bạn cũng nên tham khảo cách lựa size đồng hồ dưới đây
                    nhé: <br /><br /><b>Bước 1:</b> Đo size cổ tay (chu vi cổ tay)
                </p>
                <img src="/WatchShop/img/size_tay.png" alt="Bước 1" />
                <br />
                <br />
                <p>
                    <b>Bước 2: </b>Tham chiếu size cổ tay của bạn để chọn size mặt
                    đồng hồ phù hợp dưới đây
                </p>
                <img src="/WatchShop/img/thongsotay.png" alt="Bước 2" />
                </div>
            </div>
            </div>
    </div>
</div>
    
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
<!-- js của mình -->
<script src="/WatchShop/js/js_khach/chitietsanpham.js"></script>
