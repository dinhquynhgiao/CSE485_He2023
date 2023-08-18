<?php
include 'app/models/Employee.php';
include 'config/config.php';
class employeeRepository {
    public function getAllEmployees(){
        try{
            $db = new Database();
            $conn = $db->getConnection();
            $sql = 'select * from employees';
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $employees = [];
            foreach ($result as $row){
                $employee = new Employee($row['id'],$row['name'],$row['address'],$row['salary']);
                $employees[]= $employee;
            }
            return $employees;
        }catch (PDOException $e){
            return null;
        }

    }

    public function getDetail($employee){
        try{
            $db = new Database();
            $conn = $db->getConnection();
            $sql = 'select * from employees where id=?';
            $stmt=$conn->prepare($sql);
            $id = $employee->getId();
            $stmt->bindParam(1,$id,PDO::PARAM_INT);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            $em = new Employee($result['id'],$result['name'],$result['address'],$result['salary']);
            return $em;
        }catch (PDOException $e){
            return null;
        }

    }
}
