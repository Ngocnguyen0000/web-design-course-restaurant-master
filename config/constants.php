<?php

    // Tạo các hằng số để lưu trữ các giá trị không lặp lại
    define("LOCALHOST", "localhost");
    define('DB_USERNAME', '2N');
    define('DB_PASSWORD', '2N@123');
    define('DB_NAME', 'web-design-course-restaurant-master');
    
    // Kết nối tới cơ sở dữ liệu
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
    
    // Chọn cơ sở dữ liệu
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

?>
