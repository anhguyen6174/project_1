<?php
session_start();

// Giá sản phẩm tạm thời
$products = [
    3 => [
        'id' => 3,
        'name' => 'Scott Aspect 960',
        'price' => 12000000,
        'image' => 'images/anh-1.jpg'
    ]
];

$cart = $_SESSION['cart'] ?? [];
$cartItem = !empty($cart) ? reset($cart) : null;
$deleted1 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Thêm sản phẩm vào giỏ hàng từ product-detail.php
    if (isset($_POST["product_id"])) {
        $productId = intval($_POST["product_id"]);
        $quantity = isset($_POST["quantity"]) ? intval($_POST["quantity"]) : 1;
        if ($quantity < 1) {
            $quantity = 1;
        }

        if (isset($products[$productId])) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$productId] = [
                    'id' => $products[$productId]['id'],
                    'name' => $products[$productId]['name'],
                    'price' => $products[$productId]['price'],
                    'image' => $products[$productId]['image'],
                    'quantity' => $quantity
                ];
            }

            $_SESSION['message'] = '<div class="alert alert-success">Đã thêm sản phẩm vào giỏ hàng.</div>';
        }

        header("Location: product-detail.php");
        exit;
    }

    // XÓA sản phẩm
    if (isset($_POST["delete1"]) && $cartItem) {
        unset($_SESSION['cart'][$cartItem['id']]);
        $deleted1 = true;
        $cartItem = null;
    }

    // Cập nhật số lượng (nếu không bị xoá)
    if (!$deleted1 && isset($_POST["q1"]) && $cartItem) {
        $q1 = intval($_POST["q1"]);
        if ($q1 < 1) {
            $q1 = 1;
        }

        $_SESSION['cart'][$cartItem['id']]['quantity'] = $q1;
        $cartItem['quantity'] = $q1;
    }
}

if ($cartItem) {
    $price1 = $cartItem['price'];
    $q1 = $cartItem['quantity'];
    $total1 = $price1 * $q1;
    $sum = $total1;
} else {
    $price1 = 0;
    $q1 = 1;
    $total1 = 0;
    $sum = 0;
}

// Tính cọc 30%
$deposit = $sum * 0.30;

// Format tiền
function money($n) {
    return number_format($n, 0, ",", ".") . "đ";
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Light Cavalry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
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
        <h1 style="color: #000;">Giỏ hàng</h1>
        <p style="color: #000;">Kiểm tra lại sản phẩm trước khi đặt mua</p>
    </div>
</section>

<!-- CART -->
<section class="products">
<div class="container">

<form method="POST">

<table class="table">
    <thead>
        <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php if ($cartItem): ?>
        <tr>
            <td>
                <div class="d-flex align-items-center gap-3">
                    <img src="<?php echo htmlspecialchars($cartItem['image']); ?>" style="width:120px;">
                    <div>
                        <h5><?php echo htmlspecialchars($cartItem['name']); ?></h5>
                    </div>
                </div>
            </td>

            <!-- giá -->
            <td><?php echo money($price1); ?></td>

            <!-- số lượng -->
            <td>
                <label>Số lượng:</label>
                <input type="number"
                       name="q1"
                       value="<?php echo $q1; ?>"
                       min="1"
                       class="form-control w-50">
            </td>

            <!-- thành tiền  -->
            <td><?php echo money($total1); ?></td>

            <!-- ACTION -->
            <td class="d-flex flex-column gap-2">
                <button type="submit" name="delete1" class="btn btn-sm btn-outline-danger">
                    Xóa
                </button>

                <a href="contact.php" class="btn btn-sm btn-outline-primary">
                    Liên hệ
                </a>
            </td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">Giỏ hàng hiện chưa có sản phẩm.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>

<!-- summary -->
<div class="row mt-5">
    <div class="col-md-8 text-end">

        <h5 class="text-white">
           Đặt cọc (30%): <strong><?php echo money($deposit); ?></strong>
        </h5>

        <h4 class="text-white mt-2">
            Tổng tiền: <strong><?php echo money($sum); ?></strong>
        </h4>

        <div class="d-flex justify-content-end gap-3 mt-3">

            <a href="product.php" class="btn btn-warning">
                Tiếp tục mua
            </a>

            <a href="checkout.php" class="btn btn-danger">
                Đặt mua
            </a>

            <!--nút update -->
            <button type="submit" class="btn btn-primary">
                Cập nhật
            </button>

        </div>
    </div>
</div>

</form>

</div>
</section>

<!-- FOOTER -->
<footer class="text-center py-4 text-white" style="background:black;">
    <p>© 2026 Light Cavalry.</p>
</footer>

</body>
</html>
