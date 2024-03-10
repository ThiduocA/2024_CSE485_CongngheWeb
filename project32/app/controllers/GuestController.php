<?php
include(ROOT . "/services/EmployeeService.php");

class GuestController {
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployees();
        
        
        //Su dung du lieu do o dau
        include('views/users/index.php');
    }

    public function create(){
         //Co lay du lieu gi ko

         //Su dung du lieu do o dau
         include('views/home/add.php');
    }
}