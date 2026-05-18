<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-detail.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand fw-bold" href="index.php">Light Cavalry</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php">
                            Trang chủ
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Sản phẩm</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="promo.php">Khuyến mãi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Liên hệ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Giỏ hàng</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

<!-- PRODUCT DETAIL -->
<div class="container my-5">
    <div class="row align-items-center">

        <!-- IMAGE -->
        <div class="col-md-6">
            <img 
                src="images/xe-dap-xds-ad500-xam-dam-den.jpg" 
                class="img-fluid rounded shadow"
                alt="Scott Aspect 960">
        </div>

        <!-- INFO -->
        <div class="col-md-6">

            <!-- BREADCRUMB -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                
                    <li class="breadcrumb-item active text-white">
                        Xe đường trường
                    </li>
                </ol>  
            </nav>

            <h1 class="display-4 fw-bold text-white">Scott Aspect 960</h1>
            <h2 class="text-warning mb-4">12.000.000đ</h2>

            <div class="description mb-4 text-white">
    <h5 class="text-white">Thông số kỹ thuật:</h5>
    <p>
        Khung hợp kim nhôm cao cấp siêu nhẹ, được xử lý chống ăn mòn giúp tăng độ bền và khả năng chịu lực tốt trong nhiều điều kiện thời tiết khác nhau.<br><br>

        Hệ thống phanh đĩa thủy lực trước và sau mang lại hiệu suất phanh mạnh mẽ, an toàn ngay cả khi di chuyển ở tốc độ cao hoặc trong địa hình trơn trượt.<br><br>

        Bánh xe kích thước 29 inch với lốp gai lớn giúp tăng độ bám đường, phù hợp cho cả địa hình đường phố lẫn off-road, đảm bảo sự ổn định và êm ái khi vận hành.<br><br>

        Bộ truyền động Shimano 21 tốc độ cao cấp, chuyển số mượt mà, hỗ trợ tối đa cho người dùng khi leo dốc hoặc di chuyển đường dài.<br><br>

        Giảm xóc trước có thể điều chỉnh độ cứng, giúp hấp thụ lực va chạm hiệu quả khi đi qua địa hình gồ ghề.<br><br>

        Yên xe thiết kế công thái học, bọc đệm êm ái giúp người dùng thoải mái khi sử dụng trong thời gian dài.<br><br>

        Tay lái chắc chắn với lớp bọc chống trượt, tăng độ kiểm soát và độ an toàn khi vận hành.<br><br>

        Trọng lượng tổng thể nhẹ, phù hợp cho cả người mới bắt đầu lẫn người đam mê đạp xe chuyên nghiệp.
    </p>
</div>

            <div class="d-grid gap-3">

 
    <div class="d-flex align-items-center gap-2">
        <label for="quantity" class="mb-0 text-white">Số lượng:</label>

        <input type="number"
            id="quantity"
            name="quantity"
            value="1"
            min="1"
            class="form-control w-25">
    </div>


    <button class="btn btn-dark btn-lg"
            onclick="addToCart()">
        Thêm vào giỏ hàng
    </button>

    <a href="product.php" class="btn btn-outline-secondary">
        Quay lại cửa hàng
    </a>

</div>

        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center py-4 text-white" style="background:black;">
    <p>© 2026 Light Cavalry.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>