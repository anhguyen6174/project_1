<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
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
<section class="products-header text-center py-5">
    <div class="container">
        <h1 style="color: #000;">Tất cả sản phẩm</h1>
        <p style="color: #000;">Chọn chiếc xe phù hợp với phong cách của bạn</p>
    </div>
</section>

<!-- FILTER (chỉ là giao diện) -->
<section class="filter-bar mb-4">
    <div class="container d-flex justify-content-center flex-wrap gap-2">
        <button class="filter-btn active">Tất cả</button>
        <button class="filter-btn">Xe đường trường</button>
        <button class="filter-btn">Xe địa hình</button>
        
    </div>
</section>

<!-- PRODUCT GRID -->
<section class="products">
    <div class="container">
        <div class="row g-4">

            <!-- PRODUCT 1 -->
            <div class="col-md-3">
                <div class="bike-card">
                    <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="Scott Aspect 960" class="product-img">
                    <h5>Scott Aspect 960</h5>
                    <p class="price">12.000.000đ</p>
                    <a href="product-detail.php" class="btn-main">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <!-- PRODUCT 2 -->
            <div class="col-md-3">
                <div class="bike-card">
                    <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="Specialized Rockhopper Sport" class="product-img">
                    <h5>Specialized Rockhopper </h5>
                    <p class="price">15.000.000đ</p>
                    <a href="product-detail.php" class="btn-main">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <!-- PRODUCT 3 -->
            <div class="col-md-3">
                <div class="bike-card">
                    <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="Scott Aspect 960" class="product-img">
                    <h5>Scott Aspect 960</h5>
                    <p class="price">18.000.000đ</p>
                    <a href="product-detail.php" class="btn-main">
                        Xem chi tiết
                    </a>
                </div>
            </div>

            <!-- PRODUCT 4 -->
            <div class="col-md-3">
                <div class="bike-card">
                    <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="Cannondale Trail 5" class="product-img">
                    <h5>Cannondale Trail 5</h5>
                    <p class="price">20.000.000đ</p>
                    <a href="product-detail.php" class="btn-main">
                        Xem chi tiết
                    </a>
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