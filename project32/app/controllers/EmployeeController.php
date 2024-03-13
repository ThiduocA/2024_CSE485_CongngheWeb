<?php
require_once ('../config/config.php');
require_once ROOT.'/services/EmployeeService.php';
require_once ROOT.'/services/UserService.php';
require_once ROOT.'/views/layout/head.php';

include ROOT.'/views/layout/banner.php';
$controller = isset($_GET['controller'])? $_GET['controller'] : 'index';

function hashPassword($password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    return $hashedPassword;
}
class EmployeeController {
    //action:index = method: index
    public function index(){         
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployee();
        

        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/index.php');
    }

    public function create(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '1';
        $employeeService = new EmployeeService();
        $departments = $employeeService->getEmployeeById($id);

        $userService = new UserService();
        $user = $userService->getUserById($id);

         //Su dung du lieu do o dau
         include(ROOT.'/views/employees/employee_add.php');
    }
    public function detail(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $employeeService = new EmployeeService();
        $departments = $employeeService->getEmployeeById($id);

        $userService = new UserService();
        $user = $userService->getUserById($id);
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        //Su dung du lieu do o dau
        include(ROOT.'/views/employees/employee_detail.php');
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
    }
    public function delete(){
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $userService = new UserService();
        $user = $userService->deleteUser($id);
        $employeeService = new EmployeeService();
        $departments = $employeeService->deleteEmployee($id);
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
if($controller == 'edit'){
    $test->edit();
}
if($controller == 'delete'){
    $test->delete();
    $test->index();
}
include ROOT.'/views/layout/footer.php';
?>