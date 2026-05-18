<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
   
</head>
<body>




<div class="admin-content">

    <h1>Quản lý người dùng</h1>

    <div class="admin-box">
        <p class="text-muted">
            Danh sách người dùng đã đăng ký trong hệ thống Light Cavalry.
        </p>
    </div>

    <div class="admin-box">
        <a href="add_user.php" class="btn">Thêm người dùng mới</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>a.nguyen@gmail.com</td>
                    <td>Khách hàng</td>
                    <td>05/04/2026</td>
                    <td>
                        <a href="edit_user.php?id=1">Sửa</a> |
                            <a href="#">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>b.tran@gmail.com</td>
                    <td>Khách hàng</td>
                    <td>06/04/2026</td>
                    <td>
                        <a href="edit_user.php?id=2">Sửa</a> |
                            <a href="#">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Admin</td>
                    <td>admin@lightcavalry.com</td>
                    <td>Quản trị</td>
                    <td>01/04/2026</td>
                    <td>
                        <a href="edit_user.php?id=3">Sửa</a> |
                            <a href="#">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
