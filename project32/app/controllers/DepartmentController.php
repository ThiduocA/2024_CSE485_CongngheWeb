<?php session_start(); ?>
<?php 

include (ROOT ."/services/DepartmentService.php");
require_once ROOT.'/views/layout/head.php';

include ROOT.'/views/layout/banner.php';    
include ROOT.'/views/layout/nav-logged.php';
class DepartmentController {
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
        
        $DepartmentService = new DepartmentService();
        $getdepartments = $DepartmentService->getDepartments();
        //Su dung du lieu do o dau
        include('views/departments/index.php');
    }
    public function delete() {
        $id = $_GET['id'];
        $DepartmentService = new DepartmentService();
        $success = $DepartmentService->deleteDepartment($id);
        header('Location:?controller=department&action=index');
    }
    public function edit(){
        //Co lay du lieu gi ko
        $id = isset($_GET['id'])? $_GET['id'] : '';
        $DepartmentService = new DepartmentService();
        $departmentid = $DepartmentService->getDepartmentById($id);
        include ('views/departments/editdepartment.php');
     
    }

}