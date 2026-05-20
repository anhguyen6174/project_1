<?php
require_once __DIR__ . '/../../../config/database.php';
$users = [];
$message = '';
if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
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
            <?php if($message): ?>
            <tr>
              <td colspan="6">
                <div class="alert alert-success m-3">
                  <?php echo htmlspecialchars($message); ?>
                </div>
              </td>
            </tr>
            <?php endif; ?>
            <?php if(empty($users)): ?>
            <tr>
              <td colspan="6">Không có người dùng nào.</td>
            </tr>
            <?php else: ?>
              <?php foreach($users as $user): ?>
              <tr>
                <td><?php echo htmlspecialchars($user['users_id']); ?></td>

                <td class="fw-semibold">
                  <?php echo htmlspecialchars($user['user_full']); ?>
                </td>

                <td>
                  <?php echo htmlspecialchars($user['user_mail']); ?>
                </td>

                <td>
                  <span class="badge bg-<?php echo $user['user_level'] == 1 ? 'danger' : 'info'; ?> px-3 py-2">
                    <?php echo $user['user_level'] == 1 ? 'Quản trị' : 'Khách hàng'; ?>
                  </span>
                </td>

                <td>
                  --
                </td>

                <td>
                  <div class="d-flex justify-content-center flex-wrap gap-2">

                    <a class="btn btn-primary btn-sm px-3" href="index.php?page_layout=edit_user&id=<?php echo $user['users_id']; ?>">
                      View
                    </a>

                    <a class="btn btn-info btn-sm text-white px-3"
                       href="index.php?page_layout=edit_user&id=<?php echo $user['users_id']; ?>">
                      Edit
                    </a>

                    <a class="btn btn-danger btn-sm px-3" href="index.php?page_layout=user&delete_id=<?php echo $user['users_id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa người dùng này?');">
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
