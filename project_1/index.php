<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Light Cavalry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  
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

    <!-- HERO SECTION -->
    <section class="main">
        <div class="main-content text-center">
            <h1>Ride with the Wind. Rule the Streets.</h1>
            <h3>Light Cavalry</h3>
            <a href="product.php" class="btn-main">Khám phá xe</a>
        </div>
    </section>

    <!-- FEATURED -->
    <section class="featured">
        <div class="container text-center">
            <h4 class="text-white" style="color: #ffffff;">Xe đạp nổi bật</h4>
            <div class="row g-4 mt-3">

                <!-- FEATURED 1 -->
                <div class="col-md-4">
                    <div class="bike-card">
                        <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="LC-01" class="product-img">
                        <h5>Specialized Rockhopper Sport</h5>
                        <p class="price">12.000.000đ</p>
                        <a href="product-detail.php" class="btn-main">Xem chi tiết</a>
                    </div>
                </div>

                <!-- FEATURED 2 -->
                <div class="col-md-4">
                    <div class="bike-card">
                        <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="LC-02" class="product-img">
                        <h5>Cannondale Trail 5</h5>
                        <p class="price">15.000.000đ</p>
                        <a href="product-detail.php" class="btn-main">Xem chi tiết</a>
                    </div>
                </div>

                <!-- FEATURED 3 -->
                <div class="col-md-4">
                    <div class="bike-card">
                        <img src="images/xe-dap-xds-ad500-xam-dam-den.jpg" alt="LC-03" class="product-img">
                        <h5>Scott Aspect 960</h5>
                        <p class="price">18.000.000đ</p>
                        <a href="product-detail.php" class="btn-main">Xem chi tiết</a>
                    </div>
                </div>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
   switch ($page) {
        case 'index':
            include 'index.php';
            break;
        case 'product':
            include 'product.php';
            break;
        case 'promo':
            include 'promo.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'cart':
            include 'cart.php';
            break;
        case 'checkout':
            include 'checkout.php';
            break;
        case 'product-detail':
            include 'product-detail.php';
            break;
        case 'category':
            include 'category.php';
            break;
        case 'home':
            include 'home.php';
            break;
        default:
            include 'home.php';
    }
}

?>


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