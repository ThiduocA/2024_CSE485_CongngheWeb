<?php 
include (ROOT ."/services/DepartmentService.php");

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
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $DepartmentService = new DepartmentService();
            $departments = $DepartmentService->getDepartmentById($id);
            include ('views/departments/editdepartment.php');
        }else {
            $id = $_GET['id'];
            $departmentID = $_POST['departmentID'];
            $departmentName = $_POST['departmentName'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $logo = $_POST['logo'];
            $website = $_POST['website'];
            $parentDepartment = $_POST['parentDepartment'];
            $DepartmentService = new DepartmentService($departmentID, $departmentName, $address, $email, $phone , $logo , $website , $parentDepartment);
            $departments = $DepartmentService->updateDepartment($id,$departmentName,$address);
            header('location: index.php');
        }
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $departmentID = $_POST['departmentID'];
            $departmentName = $_POST['departmentName'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $logo = $_POST['logo'];
            $website = $_POST['website'];
            $parentDepartment = $_POST['parentDepartment'];
            $DepartmentService = new DepartmentService($departmentID, $departmentName, $address, $email, $phone , $logo , $website , $parentDepartment);
            $departments = $DepartmentService->addDepartment($departmentName,$address);
          
            
        }
        include ('views/departments/adddepartment.php');
    }
    

    
    public function create(){
         //Co lay du lieu gi ko

         //Su dung du lieu do o dau
         include('views/home/add.php');
    }
}

?>