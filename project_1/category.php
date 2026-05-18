<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/category.css">
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
        <h1>Xe Road</h1>
        <p>Duyệt và lựa chọn các mẫu xe Road phù hợp với bạn</p>
    </div>
</section>

<!-- PRODUCT LIST -->
<section class="products">
    <div class="container">
        <div class="row g-4">

            <!-- PRODUCT -->
            <div class="col-md-4">
                <div class="bike-card">
                    <img src="assets/images/lc-01.jpg" alt="Xe Road LC-01">
                    <h5>LC-01</h5>
                    <p class="price">12.000.000đ</p>
                    
                    <div class="d-flex justify-content-center gap-2">
                        <a href="product-detail.php" class="btn-main">Xem chi tiết</a>
                        <button class="btn-main">+ Giỏ hàng</button>
                    </div>
                </div>
            </div> 
            <!-- PRODUCT -->
            <div class="col-md-4">
                <div class="bike-card">
                    <img src="assets/images/lc-02.jpg" alt="Xe Road LC-02">
                    <h5>LC-02</h5>
                    <p class="price">15.000.000đ</p>

                    <div class="d-flex justify-content-center gap-2">
                        <a href="product-detail.php" class="btn-main">Xem chi tiết</a>
                        <button class="btn-main">+ Giỏ hàng</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- CART HINT -->
        <div class="text-center mt-5">
            <p class="text-muted">
                Sau khi chọn sản phẩm, bạn có thể xem lại trong giỏ hàng.
            </p>
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