<?php session_start(); ?>
<?php

require_once ROOT.'/services/EmployeeService.php';
require_once ROOT.'/services/UserService.php';
require_once ROOT.'/views/layout/head.php';

include ROOT.'/views/layout/banner.php';
include ROOT.'/views/layout/nav-logged.php';

function hashPassword($password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    return $hashedPassword;
}
class EmployeeController {
    //action:index = method: index
    public function index(){         
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $department = $_POST['department'];
            $departmentName = $_POST['department_Name'];
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $password = hashPassword($password1);
            
            $employee = new EmployeeService();
            $deparmentId = $employee->getdepartmentId($departmentName);
            $employee_add = $employee->addEmployee($name, $address, $email, $mobile, $department, 'avatar1.png', $deparmentId['departmentID']);
            $employeeID = $employee->getEmployeeId($name);
            $user = new UserService();
            $user_add = $user->addUser($username, $password , 'user', $employeeID['employeeID']);
        
        }
        else if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $department = $_POST['department'];
            $departmentName = $_POST['department_Name'];
            $username = $_POST['username'];
            $id = $_GET['id'] ;

            $employee = new EmployeeService();
            $deparmentId = $employee->getdepartmentId($departmentName);
            $employee_add = $employee->updateEmployee($id, $name, $address, $email, $mobile, $department, 'avatar1.png', $deparmentId['departmentID']);
            $employeeID = $employee->getEmployeeId($name);
            $user = new UserService();
            $user_add = $user->updateUser($username, 'user', $employeeID['employeeID']);
        }
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployee();


        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/index.php');
        include ROOT.'/views/layout/footer.php';
    }

    public function create(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';

        
        $employeeService = new EmployeeService();
        
        $userService = new UserService();
        $user = $userService->getUserById($id);

         //Su dung du lieu do o dau
         include(ROOT.'/views/employees/employee_add.php');
         include ROOT.'/views/layout/footer.php';
    }
    public function detail(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $employeeService = new EmployeeService();
        $departments = $employeeService->getEmployeeById($id);

        $userService = new UserService();
        $user = $userService->getUserById($id);
        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/employee_detail.php');
        include ROOT.'/views/layout/footer.php';
   }
    public function edit(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $employeeService = new EmployeeService();
        $departments = $employeeService->getEmployeeById($id);

        $userService = new UserService();
        $user = $userService->getUserById($id);
        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/employee_edit.php');
        include ROOT.'/views/layout/footer.php';
    }
    public function delete(){
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $userService = new UserService();
        $user = $userService->deleteUser($id);
        $employeeService = new EmployeeService();
        $departments = $employeeService->deleteEmployee($id);
        $employees = $employeeService->getEmployee();
        include(ROOT.'/views/employees/index.php');
        include ROOT.'/views/layout/footer.php';
   }
}
// echo '<pre>';
// print_r($controller);
// echo '</pre>';
// $test = new EmployeeController();
// if($controller == 'index'){
//     $test->index();
// }
// if($controller == 'add'){
//     $test->create();
// }
// if($controller == 'detail'){
//     $test->detail();
// }
// include ROOT.'/views/layout/footer.php';