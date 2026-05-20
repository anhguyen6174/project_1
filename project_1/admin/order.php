<?php
$orderId = isset($_GET['view_id']) ? intval($_GET['view_id']) : null;
$orders = [];
$orderDetail = null;

if ($orderId) {
    $orderSql = "SELECT o.*, c.name AS customer_name FROM orders o LEFT JOIN customers c ON o.customer_id = c.id WHERE o.id = $orderId";
    $orderResult = mysqli_query($conn, $orderSql);

    if ($orderResult && mysqli_num_rows($orderResult) > 0) {
        $orderDetail = mysqli_fetch_assoc($orderResult);
        $itemsSql = "SELECT od.*, p.name AS product_name FROM order_detail od LEFT JOIN products p ON od.product_id = p.id WHERE od.order_id = $orderId";
        $itemsResult = mysqli_query($conn, $itemsSql);
        $orderDetail['items'] = [];

        if ($itemsResult) {
            while ($item = mysqli_fetch_assoc($itemsResult)) {
                $orderDetail['items'][] = $item;
            }
        }
    }
} else {
    $listSql = "SELECT o.*, c.name AS customer_name FROM orders o LEFT JOIN customers c ON o.customer_id = c.id ORDER BY o.created_at DESC";
    $listResult = mysqli_query($conn, $listSql);

    if ($listResult) {
        while ($row = mysqli_fetch_assoc($listResult)) {
            $orders[] = $row;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý đơn hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="container-fluid px-4 py-4">
    <?php if ($orderDetail): ?>
        <div class="mb-4">
            <h2 class="fw-bold">Chi tiết đơn hàng #<?php echo htmlspecialchars($orderDetail['id']); ?></h2>
            <p class="text-muted mb-0">Chi tiết đơn hàng và sản phẩm đã đặt.</p>
        </div>

        <div class="card shadow-sm border-0 rounded-3 mb-4">
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md-4">
                        <strong>Khách hàng</strong>
                        <p><?php echo htmlspecialchars($orderDetail['customer_name'] ?: 'Khách ẩn danh'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <strong>Trạng thái</strong>
                        <p><?php echo htmlspecialchars($orderDetail['status']); ?></p>
                    </div>
                    <div class="col-md-4">
                        <strong>Ngày tạo</strong>
                        <p><?php echo htmlspecialchars($orderDetail['created_at']); ?></p>
                    </div>
                    <div class="col-md-4">
                        <strong>Tổng tiền</strong>
                        <p><?php echo number_format($orderDetail['total_amount'], 0, ',', '.'); ?>đ</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0 rounded-3 mb-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Sản phẩm trong đơn hàng</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($orderDetail['items'])): ?>
                                <tr>
                                    <td colspan="5">Không có sản phẩm nào trong đơn hàng.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($orderDetail['items'] as $index => $item): ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                                        <td><?php echo number_format($item['price'], 0, ',', '.'); ?>đ</td>
                                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                                        <td><?php echo number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?>đ</td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="index.php?page_layout=order" class="btn btn-secondary">Quay lại danh sách</a>
    <?php else: ?>
        <div class="mb-4">
            <h2 class="fw-bold">Quản lý đơn hàng</h2>
            <p class="text-muted mb-0">Danh sách đơn hàng đã tạo từ hệ thống Light Cavalry.</p>
        </div>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Danh sách đơn hàng</h5>
                <span class="badge bg-info"><?php echo count($orders); ?> đơn</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">
                        <thead class="table-light">
                            <tr>
                                <th>ID đơn</th>
                                <th>Khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($orders)): ?>
                                <tr>
                                    <td colspan="6">Chưa có đơn hàng nào.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td>#<?php echo htmlspecialchars($order['id']); ?></td>
                                        <td><?php echo htmlspecialchars($order['customer_name'] ?: 'Khách ẩn danh'); ?></td>
                                        <td><?php echo number_format($order['total_amount'], 0, ',', '.'); ?>đ</td>
                                        <td>
                                            <span class="badge <?php echo $order['status'] === 'completed' ? 'bg-success' : ($order['status'] === 'pending' ? 'bg-warning text-dark' : 'bg-secondary'); ?>">
                                                <?php echo htmlspecialchars($order['status']); ?>
                                            </span>
                                        </td>
                                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                                        <td>
                                            <a href="index.php?page_layout=order&view_id=<?php echo htmlspecialchars($order['id']); ?>" class="btn btn-sm btn-primary">Xem</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
