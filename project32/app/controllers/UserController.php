<?php
require_once(ROOT . "/services/EmployeeService.php");
require_once(ROOT . '/services/UserService.php');
require_once(ROOT . '/services/DepartmentService.php');


class UserController
{
    public function index()
    {
        // $userService = new UserService();
        // $userService->getUsers();
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployee();
        include('views/users/index.php');
    }
    public function advanced_search(){
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployee();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['department_Name'])) {    
                $employeeService = new EmployeeService();
                $employees = $employeeService->getEmployeeByDepartmentId($_POST['department_Name']);
        }else if(isset($_POST['search'])){
            $employeeService = new EmployeeService();
            $employees = $employeeService->getEmployeeName($_POST['search']);
        }
        

        $DepartmentService = new DepartmentService();
        $getdepartments = $DepartmentService->getDepartments();
        include('views/users/search.php');
    }
    public function logout()
    {
        session_destroy();
        header('Location:?controller=guest&action=login');
    }

    public function info()
    {
        //header("Location: ?controller=user&action=info1");
        include(ROOT . '/views/information-page/info.php');
    }


    public function edit_info()
    {
        //header("Location: ?controller=user&action=edit1");
        include(ROOT . '/views/information-page/edit_info.php');
    }

    public function process_edit_info()
    {
        include(ROOT . '/views/information-page/process_edit_info.php');
    }

    public function change_password()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $userService = new UserService();
        $user = $userService->getUserById1($id);

        include(ROOT . '/views/information-page/change_password.php');
    }
    public function process_change_password()
    {
        include(ROOT . '/views/information-page/process_change_password.php');
    }
}