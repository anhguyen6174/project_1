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

    <h1>Quản lý đơn hàng</h1>

    <div class="admin-box">
        <p class="text-muted">
            Danh sách các đơn hàng được tạo từ hệ thống Light Cavalry.
        </p>
    </div>

    <div class="admin-box">
        <table>
            <thead>
                <tr>
                    <th>ID đơn</th>
                    <th>Khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>Nguyễn Văn A</td>
                    <td>27.000.000đ</td>
                    <td>Đang xử lý</td>
                    <td>08/04/2026</td>
                    <td>
                        <a href="#">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>Trần Thị B</td>
                    <td>15.000.000đ</td>
                    <td>Hoàn thành</td>
                    <td>07/04/2026</td>
                    <td>
                        <a href="#">Xem</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>