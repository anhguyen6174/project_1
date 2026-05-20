<?php
require_once __DIR__ . '/../../../config/database.php';
$categories = [];
$message = '';
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
    }
}
?>
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





    <!-- MAIN CONTENT -->
  <section class="content">
<h1>Quản lý danh mục</h1>

        <div class="admin-box">
            <p>Quản lý các danh mục sản phẩm trong hệ thống Light Cavalry.</p>
                <a href="index.php?page_layout=add_category" class="btn btn-primary">Thêm danh mục mới</a>
        </div>
     <!-- CATEGORY TABLE -->
<div class="card shadow-sm border-0 rounded-3">

<!-- Header -->
<div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
  
  <h5 class="mb-0">Danh mục sản phẩm</h5>

  
</div>

<!-- Body -->
<div class="card-body p-0">

  <table class="table table-hover align-middle mb-0 text-center">

    <thead class="table-light">
      <tr>
        <th width="80">ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th width="150">Trạng thái</th>
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
      <?php if (empty($categories)): ?>
      <tr>
        <td colspan="5">Không có danh mục nào.</td>
      </tr>
      <?php else: ?>
        <?php foreach ($categories as $category): ?>
        <tr>
          <td><?php echo htmlspecialchars($category['id']); ?></td>

          <td class="fw-semibold">
            <?php echo htmlspecialchars($category['name']); ?>
          </td>

          <td>
            <?php echo htmlspecialchars($category['description']); ?>
          </td>

          <td>
            <span class="badge bg-success px-3 py-2">
              Hiển thị
            </span>
          </td>

          <td>
            <div class="d-flex justify-content-center gap-2">

              <a class="btn btn-primary btn-sm" href="index.php?page_layout=edit_category&id=<?php echo $category['id']; ?>">
                View
              </a>

              <a class="btn btn-info btn-sm text-white" href="index.php?page_layout=edit_category&id=<?php echo $category['id']; ?>">
                Edit
              </a>

              <a class="btn btn-danger btn-sm" href="index.php?page_layout=category&delete_category_id=<?php echo $category['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa danh mục này?');">
                Delete
              </a>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
