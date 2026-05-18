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


<div class="admin-container">
 

    <!-- MAIN CONTENT -->
   
<div class="admin-content">

    <h1>Quản lý sản phẩm</h1>

    <div class="admin-box">
        <p class="text-muted">
            Quản lý các sản phẩm xe đạp trong hệ thống Light Cavalry.
        </p>
        <a href="add_product.php" class="btn">Thêm sản phẩm mới</a>
    </div>

    <div class="admin-box">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LC Road 01</td>
                    <td>Road</td>
                    <td>12.000.000đ</td>
                    <td>
                        <a href="edit_product.php?id=1">Sửa</a> |
                        <a href="#">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>LC MTB 02</td>
                    <td>MTB</td>
                    <td>15.000.000đ</td>
                    <td>
                        <a href="edit_product.php?id=2">Sửa</a> |
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
