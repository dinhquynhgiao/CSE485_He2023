<?php
$servername = "localhost";
$username = "root";

$dbname = "xproject";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thêm dữ liệu
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
        $Name = $_POST["Name"];
        $Address = $_POST["Address"];
        $Salary = $_POST["Salary"];

        // $stmtCheckUnique = $conn->prepare("SELECT * FROM employees WHERE Address = :Address OR Salary = :Salary");
        // $stmtCheckUnique->bindParam(":Address", $Address);
        // // $stmtCheckUnique->bindParam(":Salary", $Salary);
        // $stmtCheckUnique->execute();

        // if ($stmtCheckUnique->rowCount() > 0) {
        //     echo "Address đã tồn tại.";
        // } else {
            // Thực hiện truy vấn INSERT
            $stmtInsert = $conn->prepare("INSERT INTO employees (Name, Address, Salary) VALUES (:name, :address, :Salary)");
            $stmtInsert->bindParam(":Name", $Name);
            $stmtInsert->bindParam(":Address", $Address);
            $stmtInsert->bindParam(":Salary", $Salary);
            $stmtInsert->execute();
            echo "Thêm dữ liệu thành công.";
        }
    

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>ADD</title>
    </head>
    <body>
        <!-- Form thêm dữ liệu -->
        <form method="post">
            <h3>ADD Employee</h3>
            <input type="text" name="Name" placeholder="Name" required><br>
            <input type="text" name="Address" placeholder="Address" required><br>
            <input type="number" name="Salary" placeholder="Salary" pattern="[0-9]{10}" required><br>
            <button type="submit" name="add">ADD</button>
        </form>
