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

    <h1>Thêm người dùng</h1>

    <div class="admin-box">
        <p class="text-muted">
            Tạo mới một người dùng trong hệ thống Light Cavalry.
        </p>
    </div>

    <div class="admin-box">
        <form>

            <label for="name">Họ tên</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Ví dụ: Nguyễn Văn A"
            >

            <label for="email">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="example@gmail.com"
            >

            <label for="role">Vai trò</label>
            <select id="role" name="role">
                <option value="">-- Chọn vai trò --</option>
                <option value="customer">Khách hàng</option>
                <option value="admin">Quản trị</option>
            </select>

            <div style="margin-top: 16px;">
                <button type="submit">Lưu người dùng</button>
                &nbsp;&nbsp;
                <a href="user.php">Quay lại danh sách</a>
            </div>

        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>