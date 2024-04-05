<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Thêm Admin</h1>

        <br>
        <br>

        <?php 
            if(isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']); 
            }
        ?>

        <form action="" method="POST">

            <table>
                <tr>
                    <td>Họ và tên: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Nhập tên của bạn">
                    </td>
                </tr>

                <tr>
                    <td>Tên người dùng: </td>
                    <td>
                        <input type="text" name="username" placeholder="Nhập tên người dùng">
                    </td>
                </tr>

                <tr>
                    <td>Mật khẩu: </td>
                    <td>
                        <input type="password" name="password" placeholder="Mật khẩu của bạn">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Thêm Admin" name="submit" class="btn-secondary"> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>

<?php
    // Xử lý dữ liệu và lưu vào cơ sở dữ liệu
    if (isset($_POST["submit"])) {
        // Lấy dữ liệu từ biểu mẫu
        $full_name = $_POST["full_name"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        // Truy vấn SQL để lưu dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO tbl_admin (full_name, username, password) VALUES ('$full_name', '$username', '$password')";

        // Thực thi truy vấn và lưu kết quả
        $res = mysqli_query($conn, $sql);

        // Kiểm tra xem truy vấn đã thực thi thành công hay không và thiết lập thông báo tương ứng
        if($res) {
            $_SESSION['add'] = 'Thêm Admin thành công';
            header('Location: manage-admin.php');
            exit; // Thêm dòng này để ngăn mã tiếp tục thực thi sau khi chuyển hướng
        } else {
            $_SESSION['add'] = 'Thêm Admin thất bại';
            header('Location: add-admin.php');
            exit; // Thêm dòng này để ngăn mã tiếp tục thực thi sau khi chuyển hướng
        
        }
    }
?>
