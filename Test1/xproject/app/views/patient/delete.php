<?php
require_once __DIR__ . '/../config/config.php';
require_once APP_ROOT.'/app/services/EmployeeService.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete"])) {
    // Xử lý xóa dữ liệu
    // ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Xóa dữ liệu</title>
</head>
<body>
    <!-- Hiển thị danh sách dữ liệu và các nút xóa -->
</body>
</html>
