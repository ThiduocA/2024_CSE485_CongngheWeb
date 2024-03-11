<?php
//include(ROOT . 'services/UserService.php');
include(ROOT . "/services/EmployeeService.php");
class UserController
{
    public function index()
    {
        // $userService = new UserService();
        // $userService->getUsers();
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployees();
        include('views/users/index.php');
    }
}
