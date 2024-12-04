<?php


// Kiểm tra nếu có yêu cầu đăng xuất
if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    // Hủy toàn bộ session
    session_start();
    session_unset(); 
    // Hủy session ID
    session_destroy(); 

    // Chuyển hướng về trang đăng nhập sau 2 giây
    header('Refresh: 2; url=login.php');
    echo "<p>Bạn đã đăng xuất thành công. Chuyển hướng về trang đăng nhập...</p>";
    exit();
}

// Nếu không có yêu cầu đăng xuất, hiển thị thông báo xác nhận
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đăng xuất</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="alert">
        <strong>Thông báo:</strong> Bạn có chắc chắn muốn đăng xuất không?
    </div>
    <a href="logout.php?confirm=yes" class="btn">Đồng ý</a>
    <a href="index.php" class="btn btn-danger">Hủy</a>
</body>
</html>
