<?php
// Giá sản phẩm
$price1 = 12000000;

// Mặc định số lượng
$q1 = 1;

// Nếu bấm cập nhật
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $q1 = $_POST["q1"];

    if ($q1 < 1) $q1 = 1;
}

// Tính tiền
$total1 = $price1 * $q1;
$sum = $total1;

// Format tiền
function money($n) {
    return number_format($n, 0, ",", ".") . "đ";
}

$deleted1 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // XÓA sản phẩm
    if (isset($_POST["delete1"])) {
        $deleted1 = true;
    }

    // Cập nhật số lượng (nếu không bị xoá)
    if (!$deleted1) {
        $q1 = $_POST["q1"];
        if ($q1 < 1) $q1 = 1;
    }
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
        <tr>
            <td>
                <div class="d-flex align-items-center gap-3">
                    <img src="images/anh-1.jpg" style="width:120px;">
                    <div>
                        <h5>LC-01</h5>
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
            <td>
                <button type="button" class="btn btn-sm btn-outline-danger">
                    Xóa
                </button>

                <a href="contact.php" class="btn btn-sm btn-outline-primary">
                    Liên hệ
                </a>
            </td>
        </tr>
    </tbody>
</table>

<!-- summary -->
<div class="row mt-5">
    <div class="col-md-8 text-end">

        <h4 class="text-white">
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
