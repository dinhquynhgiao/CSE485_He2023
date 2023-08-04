<?php


class Employees{
    //properties

    private $EmployeeID;
    private $Name;
    private $Address;
    private $Salary;

    //method

    public function __construct($EmployeeID, $Name, $Address, $Salary){
        $this->EmployeeID = $EmployeeID;
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Salary = $Salary;

    }

    //Getter/Setter;

    public function getEmployeesID(){
        return $this->EmployeeID;
    }
    public function setEmployeesID($EmployeeID){
        $this->EmployeeID= $EmployeeID;

    }
    public function getName(){
        return $this->Name;
    }
    public function setName($Name){
        $this->Name= $Name;

    }
    public function getAddress(){
        return $this->Address;
    }
    public function setAddress($Address){
        $this->Address= $Address;

    }
    public function getSalary(){
        return $this->Salary;
    }
    public function setSalary($Salary){
        $this->Salary= $Salary;

    }
    
}