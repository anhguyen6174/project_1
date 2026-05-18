<?php
session_start();
$conn = new mysqli("localhost", "root", "1234", "light_cavalry");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $note = $_POST['note'] ??'';

    // 1. Lưu khách hàng
    
$check = $conn->query("SELECT id FROM customers WHERE email='$email'");

if ($check->num_rows > 0) {
    $row = $check->fetch_assoc();
    $customer_id = $row['id']; // dùng lại
    echo "Khách đã tồn tại<br>";
} else {
    $conn->query("INSERT INTO customers (name, email, phone, address)
                  VALUES ('$name', '$email', '$phone', '$address')");
    $customer_id = $conn->insert_id;
    echo "Đã thêm khách mới<br>";
}


    // 2. Tính tổng tiền
    $total = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
}


    // 3. Tạo đơn hàng
    $sql_order = "INSERT INTO orders (customer_id, total_amount) 
                  VALUES ($customer_id, $total)";
    $conn->query($sql_order);

    $order_id = $conn->insert_id;

    // 4. Lưu chi tiết đơn hàng
   if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['id'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        $conn->query("
            INSERT INTO order_detail (order_id, product_id, quantity, price)
            VALUES ($order_id, $product_id, $quantity, $price)
        ");
    }
}

    // 5. Xóa giỏ hàng
    unset($_SESSION['cart']);

    echo "<script>alert('Đặt hàng thành công!');</script>";
}
?>
<?php
$errors = [];
$name = $email = $address = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $address = trim($_POST["address"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "") {
        $errors["name"] = "Không được để trống tên";
    }

    if ($address == "") {
        $errors["address"] = "Không được để trống địa chỉ";
    }

    if ($email == "") {
        $errors["email"] = "Không được để trống email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email không hợp lệ";
    }

    if ($message == "") {
        $errors["message"] = "Không được để trống nội dung";
    }

    if (empty($errors)) {
        echo "<script>alert('Gửi thông tin thành công!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Cavalry</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Light Cavalry</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="promo.php">Khuyến mãi</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <section class="text-center py-5 bg-dark text-white">
        <div class="container">
            <h1 style="color: #ffffff">Thanh toán</h1>
            <p style="color: #ffffff">Điền thông tin để hoàn tất đơn hàng</p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="container my-5">
        <div class="row">

            <!-- THÔNG TIN -->
            <div class="col-md-6 mb-4" style="color: #ffffff">
                <h4>Thông tin liên hệ</h4>
                <p><strong>Light Cavalry</strong></p>
                <p>Email: lightcavalry@gmail.com</p>
                <p>SĐT: 0972 637 740</p>
                <p>Địa chỉ: TP. Hà Nội</p>
            </div>

            <!-- FORM -->
            <div class="col-md-6">
                <h4 style="color: #ffffff">Khách hàng gửi thông tin</h4>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label text-white">Họ và tên</label>
                        <input type="text" name="name" class="form-control"
                            value="<?php echo $name; ?>">
                        <small class="text-danger">
                            <?php echo $errors["name"] ?? ""; ?>
                        </small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Địa chỉ nhận hàng</label>
                        <input type="text" name="address" class="form-control"
                            value="<?php echo $address; ?>">
                        <small class="text-danger">
                            <?php echo $errors["address"] ?? ""; ?>
                        </small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Số điện thoại</label>

                        <input type="text" name="phone" class="form-control"
                            value="<?php echo $phone ?? ''; ?>"
                            maxlength="11"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')">

                        <small class="text-danger">
                            <?php echo $errors["phone"] ?? ""; ?>
                        </small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Email</label>
                        <input type="text" name="email" class="form-control"
                            value="<?php echo $email; ?>">
                        <small class="text-danger">
                            <?php echo $errors["email"] ?? ""; ?>
                        </small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Ghi chú</label>
                        <textarea name="message" class="form-control" rows="4"><?php echo $message; ?></textarea>
                        <small class="text-danger">
                            <?php echo $errors["message"] ?? ""; ?>
                        </small>
                    </div>

                    <button type="submit" name="submit">Gửi Thông Tin</button>

                </form>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-4 text-white bg-dark">
        <p>© 2026 Light Cavalry.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>