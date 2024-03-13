<?php
require_once(ROOT . "/services/EmployeeService.php");
require_once(ROOT . '/services/UserService.php');

class GuestController {
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployees();
        //Su dung du lieu do o dau
        include('views/guest/index.php');
    }

    public function login(){
         //Co lay du lieu gi ko
         $userService = new UserService();
         //Su dung du lieu do o dau
         
         include('views/guest/login.php');
    }
}