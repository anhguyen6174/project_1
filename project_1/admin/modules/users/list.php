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




<div class="container-fluid px-4 py-4">

  <!-- TITLE -->
  <div class="mb-4">
    <h2 class="fw-bold">Quản lý người dùng</h2>

    <p class="text-muted mb-0">
      Danh sách người dùng đã đăng ký trong hệ thống Light Cavalry.
    </p>
  </div>

  <!-- CARD -->
  <div class="card shadow-sm border-0 rounded-3">

    <!-- HEADER -->
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

      <h5 class="mb-0">Danh sách người dùng</h5>

      

    </div>

    <!-- BODY -->
    <div class="card-body p-0">

      <div class="table-responsive">

        <table class="table table-hover align-middle mb-0 text-center">

          <thead class="table-light">
            <tr>
              <th width="80">ID</th>
              <th width="20%">Họ tên</th>
              <th width="25%">Email</th>
              <th width="15%">Vai trò</th>
              <th width="15%">Ngày tạo</th>
              <th width="25%">Thao tác</th>
            </tr>
          </thead>

          <tbody>

            <!-- User 1 -->
            <tr>
              <td>1</td>

              <td class="fw-semibold">
                Nguyễn Văn A
              </td>

              <td>
                a.nguyen@gmail.com
              </td>

              <td>
                <span class="badge bg-info px-3 py-2">
                  Khách hàng
                </span>
              </td>

              <td>
                05/04/2026
              </td>

              <td>
                <div class="d-flex justify-content-center flex-wrap gap-2">

                  <a class="btn btn-primary btn-sm px-3" href="#">
                    View
                  </a>

                  <a class="btn btn-info btn-sm text-white px-3"
                     href="edit_user.php?id=1">
                    Edit
                  </a>

                  <a class="btn btn-danger btn-sm px-3" href="#">
                    Delete
                  </a>

                </div>
              </td>
            </tr>

            <!-- User 2 -->
            <tr>
              <td>2</td>

              <td class="fw-semibold">
                Trần Thị B
              </td>

              <td>
                b.tran@gmail.com
              </td>

              <td>
                <span class="badge bg-info px-3 py-2">
                  Khách hàng
                </span>
              </td>

              <td>
                06/04/2026
              </td>

              <td>
                <div class="d-flex justify-content-center flex-wrap gap-2">

                  <a class="btn btn-primary btn-sm px-3" href="#">
                    View
                  </a>

                  <a class="btn btn-info btn-sm text-white px-3"
                     href="edit_user.php?id=2">
                    Edit
                  </a>
<a class="btn btn-danger btn-sm px-3" href="#">
                    Delete
                  </a>

                </div>
              </td>
            </tr>

            <!-- Admin -->
            <tr>
              <td>3</td>

              <td class="fw-semibold">
                Admin
              </td>

              <td>
                admin@lightcavalry.com
              </td>

              <td>
                <span class="badge bg-danger px-3 py-2">
                  Quản trị
                </span>
              </td>

              <td>
                01/04/2026
              </td>

              <td>
                <div class="d-flex justify-content-center flex-wrap gap-2">

                  <a class="btn btn-primary btn-sm px-3" href="#">
                    View
                  </a>

                  <a class="btn btn-info btn-sm text-white px-3"
                     href="edit_user.php?id=3">
                    Edit
                  </a>

                  <a class="btn btn-danger btn-sm px-3" href="#">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
