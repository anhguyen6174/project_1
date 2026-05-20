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
                <a href="modules/categories/add.php" class="btn btn-primary">Thêm danh mục mới</a>
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

      <!-- Category 1 -->
      <tr>
        <td>1</td>

        <td class="fw-semibold">
          Xe đạp địa hình
        </td>

        <td>
          Danh mục xe đạp sử dụng động cơ điện
        </td>

        <td>
          <span class="badge bg-success px-3 py-2">
            Hiển thị
          </span>
        </td>

        <td>
          <div class="d-flex justify-content-center gap-2">

            <a class="btn btn-primary btn-sm" href="#">
              View
            </a>

            <a class="btn btn-info btn-sm text-white" href="#">
              Edit
            </a>

            <a class="btn btn-danger btn-sm" href="#">
              Delete
            </a>

          </div>
        </td>
      </tr>

      <!-- Category 2 -->
      <tr>
        <td>2</td>

        <td class="fw-semibold">
          Xe đạp thể thao
        </td>

        <td>
          Danh mục xe đạp dành cho thể thao và địa hình
        </td>

        <td>
          <span class="badge bg-warning text-dark px-3 py-2">
            Ẩn
          </span>
        </td>

        <td>
          <div class="d-flex justify-content-center gap-2">

            <a class="btn btn-primary btn-sm" href="#">
              View
            </a>

            <a class="btn btn-info btn-sm text-white" href="#">
              Edit
            </a>

            <a class="btn btn-danger btn-sm" href="#">
              Delete
            </a>

          </div>
        </td>
      </tr>

    </tbody>

  </table>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
