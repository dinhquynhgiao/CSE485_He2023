<?php

require_once __DIR__ .'/app/config/config.php';
//require_once APP_ROOT.'/app/controllers/HomeController.php';

// $homeController = new HomeController();
// $homeController->index();


$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action     = isset($_GET['action'])?$_GET['action']:'index';


if($controller=='home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
// }else if($controller == 'employee'){
//     require_once APP_ROOT.'/app/controllers/EmployeeController.php';
//     $employeeController = new EmployeeController();
//     $employeeController->index();
// }else {
//     echo "Not found";
}
