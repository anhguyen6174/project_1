<?php
require_once __DIR__ . '/../../../config/database.php';
$products = [];
$message = '';
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}

$sql = "SELECT p.id, p.name, p.stock, p.price, c.name AS category_name
        FROM products p
        LEFT JOIN categories c ON p.category_id = c.id";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý sản phẩm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f8f9fa;
    }

    .page-wrapper {
      padding: 30px 40px;
    }

    .card {
      border-radius: 12px;
    }

    table td, table th {
      vertical-align: middle;
    }
  </style>
</head>

<body>

<div class="container-fluid page-wrapper">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h2 class="fw-bold">Quản lý sản phẩm</h2>
      <p class="text-muted mb-0">Danh sách sản phẩm Light Cavalry</p>
    </div>

    <a href="index.php?page_layout=add_product" class="btn btn-primary px-4">
      + Thêm sản phẩm
    </a>
  </div>

  <!-- Card -->
  <div class="card shadow-sm border-0">

    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Danh sách sản phẩm</h5>
    </div>

    <div class="card-body p-0">

      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 text-center">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th class="text-start">Tên sản phẩm</th>
              <th>Loại</th>
              <th>Trạng thái</th>
              <th width="250">Thao tác</th>
            </tr>
          </thead>

          <tbody>
            <?php if ($message): ?>
            <tr>
              <td colspan="5">
                <div class="alert alert-success m-3">
                  <?php echo htmlspecialchars($message); ?>
                </div>
              </td>
            </tr>
            <?php endif; ?>
            <?php if (empty($products)): ?>
            <tr>
              <td colspan="5">Không có sản phẩm nào.</td>
            </tr>
            <?php else: ?>
              <?php foreach ($products as $product): ?>
              <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td class="fw-semibold text-start"><?php echo htmlspecialchars($product['name']); ?></td>
                <td><?php echo htmlspecialchars($product['category_name'] ?: 'Chưa phân loại'); ?></td>
                <td>
                  <span class="badge <?php echo $product['stock'] > 0 ? 'bg-success' : 'bg-danger'; ?> px-3 py-2">
                    <?php echo $product['stock'] > 0 ? 'Còn hàng' : 'Hết hàng'; ?>
                  </span>
                </td>
                <td>
                  <div class="d-flex justify-content-center gap-2">
                    <a class="btn btn-primary btn-sm" href="index.php?page_layout=edit_product&id=<?php echo $product['id']; ?>">View</a>
                    <a class="btn btn-info btn-sm text-white" href="index.php?page_layout=edit_product&id=<?php echo $product['id']; ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="index.php?page_layout=product&delete_product_id=<?php echo $product['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">Delete</a>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
