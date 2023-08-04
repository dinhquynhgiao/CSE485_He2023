<?php 
require_once __DIR__ . '/../config/config.php';

require_once APP_ROOT.'/app/models/Employee.php';
// require_once __DIR__ .'/app/config/config.php';
class EmployeeService{
    public function getAllEmployees(){
        //Buoc 1 ke noi database
        try{
            $conn = new PDO('mysql:host=localhost;dbname=employees', 'root',);

            //truy van du lieu
            $sql = "SELECT * FROM employees ORDER BY EmployeeID desc";
            $stmt = $conn->query($sql);

            //Buoc 3 xu lys ket qua va tra ve
            $employee = [];
            while($row = $stmt->fetch()){
                $employee = new Employees( $row['EmployeeID'], $row['Name'], $row['Address'], $row['Salary']);
                $employees[] = $employee;
            }
            return $employees;
        }
        catch(PDOException $e){
            // $conn = null;
            // echo $e->getMessage();
            return $employees=[];
        }
    }
}