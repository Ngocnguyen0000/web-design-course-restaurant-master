<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Login</h1>
        <br>

        <?php

        session_start();

        if (isset($_POST['submit'])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Kiểm tra xem dữ liệu 2 bảng có trùng
            $sql = "SELECT * FROM `tbl_admin` WHERE username = '$username' AND password = '$password' ";

            $result = mysqli_query($conn, $sql);

            // Nếu nó trùng với 2 tài khoản
            if(mysqli_num_rows($result) == 1){
                // Khi đăng nhập thành công sẽ tạo ra một session 
                $_SESSION['mySession'] = $username;
                // Khi thành công mới mở ra trang index
                header('location: index.php');
            }else{
                echo "Tài khoản hoặc mật khẩu sai";
            }
        }
        ?>

        <style>
            .tbl-30 {
                width: 30%;
                border-collapse: collapse;
                margin: 25px auto; /* Center the table */
                font-size: 18px;
                text-align: left;
            }

            .tbl-30 th {
                background-color: #4CAF50;
                color: white;
            }

            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 5px 0 20px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .btn-secondary {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn-secondary:hover {
                background-color: #45a049;
            }

            h1 {
                text-align: center;
                color: #333;
            }
        </style>

        <form action="login.php" method="POST">
            <table class='tbl-30'>
                <!-- <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Nhập họ và tên của bạn">
                    </td>
                </tr> -->

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Nhập tên người dùng">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Login" name="submit" class="btn-secondary"> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>
