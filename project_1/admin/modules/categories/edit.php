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

    <h1>Sửa danh mục</h1>

    <div class="admin-box">
        <p class="text-muted">
            Cập nhật thông tin danh mục sản phẩm trong hệ thống Light Cavalry.
        </p>
    </div>

    <div class="admin-box">
        <!-- Form chỉnh sửa (HTML phác thảo) -->
        <form action="#" method="post">

            <label for="name">Tên danh mục</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="Road"
            >

            <label for="description">Mô tả</label>
            <textarea 
                id="description" 
                name="description" 
                rows="4"
            >Xe đạp đường trường</textarea>

            <div style="margin-top: 16px;">
                <button type="submit">Cập nhật</button>
                &nbsp;&nbsp;
                <a href="category.php">Quay lại danh sách</a>
            </div>

        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>