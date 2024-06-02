<?php include("partials/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Thêm Admin</h1>
        <br>

        <?php
        if (isset($_POST['submit'])) {
            $id = "";
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Tạo câu truy vấn SQL để thêm admin vào cơ sở dữ liệu
            $sql = "INSERT INTO tbl_admin (id, full_name, username, password) 
                        VALUES ('$id', '$full_name', '$username', '$password')";

            // Thực thi truy vấn - In ra
            $result = mysqli_query($conn, $sql);
            // Chạy đến trang muốn tới
            header('location: manage-admin.php');
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

            /* .tbl-30 th, .tbl-30 td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        } */

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

        <form action="" method="POST">
            <table class='tbl-30'>
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Nhập họ và tên của bạn">
                    </td>
                </tr>

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
                        <input type="submit" value="Thêm Admin" name="submit" class="btn-secondary"> 
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include("partials/footer.php"); ?>








