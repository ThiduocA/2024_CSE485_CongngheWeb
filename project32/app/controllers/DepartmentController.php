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


        $id = isset($_GET['id'])? $_GET['id'] : '';
    
   
        if(empty($id)) {
         
            header("Location: error.php?message=Thiếu+tham+số+ID");
            exit;
        }
    
        $DepartmentService = new DepartmentService();
    

        $departmentid = $DepartmentService->getDepartmentById($id);
    
      
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $departmentName = $_POST['departmentName'];
            $address = $_POST['address'];
            $success = $DepartmentService->updateDepartment($id, $departmentName, $address);
            if ($success) {

                header('Location: ?controller=department&action=index');
                exit;
            } else {

                $error_message = "Cập nhật phòng ban không thành công.";
            }
        }
    
 
        include ('views/departments/editdepartment.php');
    }
    public function add() {
     
        $DepartmentService = new DepartmentService();
    
      
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $departmentName = $_POST['departmentName'];
            $address = $_POST['address'];
            $email = $_POST['email']; 
            $phone = $_POST['phone']; 
            $logo = $_POST['logo']; 
            $website = $_POST['website']; 
            $parentDepartment = $_POST['parentDepartment']; 
    
    
            $success = $DepartmentService->addDepartment($departmentName, $address, $email, $phone, $logo, $website, $parentDepartment);
    
            if ($success) {
                
                header('Location: ?controller=department&action=index');
                exit;
            } else {
           
                $error_message = "Thêm phòng ban không thành công.";
            }
        }
    
    
        include ('views/departments/adddepartment.php');
    }
    public function view(){
        $id = isset($_GET['id'])? $_GET['id'] : '';
    
   
        if(empty($id)) {
         
            header("Location: error.php?message=Thiếu+tham+số+ID");
            exit;
        }
    
        $DepartmentService = new DepartmentService();
    

        $departmentid = $DepartmentService->getDepartmentById($id);
        include ('views/departments/viewdepartment.php');
    }
}


}