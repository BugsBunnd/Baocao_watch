<?php
    session_start();
    include("../model/pdo.php");
    include("../model/login.php");

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = checkuser($username,$password);

        if (!empty($user)) { // Nếu mảng không rỗng hoặc không phải false/null
            extract($user); // Trích xuất các phần tử của mảng thành biến
            $_SESSION['s_user'] = $user;
            header('location: index.php?act=danhmuc');
        } else {
            // Xử lý khi đăng nhập thất bại
            $tb = "Tài khoản này không tồn tại !!!";
        } 
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <style>
      body {
        background-image: url("../img/bg_login.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }

      .login {
        width: 25%;
        height: 400px;
        margin: 0 auto;
        margin-top: 250px;
        border-radius: 20px;
        border: 1px solid rgb(189, 177, 177);
        color: rgb(255, 255, 255);
      }

      /* Thông báo trượt */
      .notification {
        position: fixed;
        top: -100px; /* Bắt đầu từ trên */
        left: 50%; /* Ẩn bên ngoài màn hình */
        transform: translateX(-50%);
        width: 300px;
        background-color: #444;
        color: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        opacity: 0; /* Ẩn ban đầu */
        transition: all 0.5s ease, opacity 3s ease-out;
        z-index: 1000;
      }

      /* Thanh tiến trình */
      .progress-bar {
        position: relative;
        background-color: #ddd;
        height: 5px;
        margin-top: 10px;
        border-radius: 3px;
        overflow: hidden;
      }

      .progress-bar span {
        display: block;
        height: 100%;
        width: 0;
        background-color: #4caf50;
        transition: width 3s linear; /* Chuyển động thanh tiến trình */
      }
    </style>
    <main>
      <div class="login">
        <p class="text-center fs-4 mt-3">Login Admin</p>
        <div class="from mt-3">
          <form action="login.php" method="post">
            <div class="mb-0 p-3">
              <label for="exampleInputEmail1" class="form-label"
                >Username</label
              >
              <input type="text" class="form-control"  name="username"/>
            </div>
            <div class="mb-2 p-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                name="password"
              />
            </div>
            <?php
            
                if(isset($tb)&&($tb!="")){
                    echo "<h6 style='color:red; text-align:center; background-color:white; padding:5px;'>".$tb."</h6>";
                }

            ?>
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
              <button
                class="btn btn-primary"
                type="submit"
                name="login"
              >
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
