<?php 
require_once APP_ROOT.'/app/services/EmployeeService.php';

class HomeController{
    public function index(){
        //goi du lieu tu EmployeeService
        $EmployeeService = new EmployeeService();
        $employee = $EmployeeService->getAllEmployees();
        //render du lieu la duoc tu homepage
        include APP_ROOT.'/app/views/home/index.php';
    }
}