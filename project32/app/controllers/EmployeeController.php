<?php
require_once ('../config/config.php');
require_once ROOT.'/services/EmployeeService.php';
require_once ROOT.'/views/layout/head.php';

include ROOT.'/views/layout/banner.php';
$controller = isset($_GET['controller'])? $_GET['controller'] : 'index';

class EmployeeController {
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();


        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/index.php');
    }

    public function create(){
         //Co lay du lieu gi ko
         $employeeService = new EmployeeService();
         $department = $employeeService->getAllEmployee();

         //Su dung du lieu do o dau
         include(ROOT.'/views/employees/employee_add.php');
    }
    public function detail(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $employeeService = new EmployeeService();
        $departments = $employeeService->getEmployeeById($id);
        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/employee_detail.php');
   }
}
// echo '<pre>';
// print_r($controller);
// echo '</pre>';
$test = new EmployeeController();
if($controller == 'index'){
    $test->index();
}
if($controller == 'add'){
    $test->create();
}
if($controller == 'detail'){
    $test->detail();
}
include ROOT.'/views/layout/footer.php';
?>