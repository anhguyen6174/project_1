<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/promo.css">
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

<!-- HEADER -->
<section class="products-header text-center">
    <div class="container">
        <h1 style="color: #000;">Chương trình khuyến mãi</h1>
        <p style="color: #000;">Ưu đãi hấp dẫn dành cho khách hàng của Light Cavalry</p>
    </div>
</section>

<!-- PROMO CONTENT -->
<section class="products">
    <div class="container">
        <div class="row g-4">

            <!-- PROMO 1 -->
            <div class="col-md-4">
                <div class="bike-card">
                    <h5 style="color: #000;">Giảm 10% xe Road</h5>
                    <p class="price">
                        Áp dụng cho các mẫu xe Road trong tháng này.
                    </p>
                </div>
            </div>

            <!-- PROMO 2 -->
            <div class="col-md-4">
                <div class="bike-card">
                    <h5 style="color: #000;">Miễn phí bảo dưỡng</h5>
                    <p class="price">
                        Miễn phí bảo dưỡng 6 tháng cho mọi đơn hàng.
                    </p>
                </div>
            </div>

            <!-- PROMO 3 -->
            <div class="col-md-4">
                <div class="bike-card">
                    <h5 style="color: #000;">Tặng phụ kiện</h5>
                    <p class="price">
                        Tặng kèm phụ kiện khi mua xe MTB.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center py-4 text-white" style="background:black;">
    <p>© 2026 Light Cavalry.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
