<?php
class EmployeeController {
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
       
        //Su dung du lieu do o dau
        include('views/employees/index.php');
    }

    public function create(){
         //Co lay du lieu gi ko

         //Su dung du lieu do o dau
         include('views/home/add.php');
    }
}