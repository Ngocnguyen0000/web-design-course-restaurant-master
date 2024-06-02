<?php include ("partials/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1>Quản lý Admin </h1>

        <br>
        <br>

        <!-- Nút để thêm Admin -->
        <a href="add-admin.php" class="btn-primary"> Thêm Admin</a>
        <br>
        <br>

        <?php
            // Kiểm tra xem có thông báo từ session không
            if (isset($_SESSION['add'])) {
                echo "Xin chào".$_SESSION['add']; // Hiển thị thông báo
                unset($_SESSION['add']); // Xóa thông báo từ session
            }
        ?>
        <br>
        <br>
        <br>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Họ và tên.</th>
                <th>Tên người dùng</th>
                <th>Thao tác</th>
            </tr>

            <?php
            //Query to get all admin
            $sql = "SELECT * FROM tbl_admin";
            //Execute the query
            $res = mysqli_query($conn,$sql);
            //Check whether the query is executed of not

            ?>



            <tr>
                <td>1. </td>
                <td>Vijay Thapa</td>
                <td>Vijaythapa</td>
                <td>
                    <a href="#" class="btn-secondary">Cập nhật Admin </a>
                    <a href="#" class="btn-danger">Xóa Admin </a>
                </td>
            </tr> 

            <!-- Các dòng tiếp theo của bảng -->

        </table>
    </div>
</div>

<?php include("partials/footer.php"); ?>
