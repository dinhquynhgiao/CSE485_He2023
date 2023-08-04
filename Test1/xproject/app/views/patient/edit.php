<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit"])) {
    // Xử lý sửa dữ liệu
    // ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa dữ liệu</title>
</head>
<body>
    <form method="post">
        <!-- Form hiển thị thông tin và cho phép sửa -->
        <button type="submit" name="edit">Sửa</button>
    </form>
</body>
</html>
