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

    <a href="add_product.php" class="btn btn-primary px-4">
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

            <tr>
              <td>1</td>
              <td class="fw-semibold text-start">Light Cavalry X1</td>
              <td>Xe đạp điện</td>
              <td>
                <span class="badge bg-success px-3 py-2">Còn hàng</span>
              </td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <a class="btn btn-primary btn-sm">View</a>
                  <a class="btn btn-info btn-sm text-white">Edit</a>
                  <a class="btn btn-danger btn-sm">Delete</a>
                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td class="fw-semibold text-start">Light Cavalry S2</td>
              <td>Xe đạp thể thao</td>
              <td>
                <span class="badge bg-warning text-dark px-3 py-2">Sắp hết</span>
              </td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <a class="btn btn-primary btn-sm">View</a>
                  <a class="btn btn-info btn-sm text-white">Edit</a>
                  <a class="btn btn-danger btn-sm">Delete</a>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
