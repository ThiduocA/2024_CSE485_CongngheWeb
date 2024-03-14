<?php 
include (ROOT."/models/Department.php");
include (ROOT."/config/database.php");
class DepartmentService {
    public function getdepartmentName($id)
    {
        $conn = connectDB();
        $sql = "SELECT departmentName FROM departments WHERE departmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $departmentName = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $departmentName;
    }
    function getDepartments() {
        $conn = connectDB();
        $sql = "SELECT * FROM departments";
        $result = mysqli_query($conn, $sql);
        $departments = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
           $departments[] = $row;
        }
        $obj_departments = [];
        foreach($departments as $department){
            $obj = new department($department['departmentID'], $department['departmentName'], $department['address'], $department['email'],$department['phone'], $department['logo'], $department['website'], $department['parentDepartmentID']);
            $obj_departments[] = $obj;
            // array_push($obj_posts, $obj);
        }
        mysqli_free_result($result);
        return $obj_departments;
    }
    function deleteDepartment($id) {
        try {
            $conn = connectDB();
            $sql = "DELETE FROM departments WHERE departmentID = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            $result = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } catch (\Throwable $th) {
            echo 'khong xoa dc';
        }
    }
    function getDepartmentById($id) {
        $conn = connectDB();
        $sql = "SELECT * FROM departments WHERE departmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $department = mysqli_fetch_assoc($result);
        $departments = array();
        mysqli_free_result($result);
        $obj = new department($department['departmentID'], $department['departmentName'], $department['address'], $department['email'],$department['phone'], $department['logo'], $department['website'], $department['parentDepartmentID']);
        mysqli_stmt_close($stmt);
        return $obj;
    }
    function updateDepartment($id, $departmentName, $address ) {
        $conn = connectDB();
        
        try {
            $sql = "UPDATE departments SET departmentName = ?, address = ? WHERE departmentID = ?";
            $stmt = mysqli_prepare($conn, $sql);
            if (!$stmt) {
                throw new Exception("Prepare statement failed: " . mysqli_error($conn));
            }
            mysqli_stmt_bind_param($stmt, "ssi", $departmentName, $address, $id);
            $result = mysqli_stmt_execute($stmt);
            if (!$result) {
                throw new Exception("Execute statement failed: " . mysqli_error($conn));
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            return true; 
        } catch (Exception $e) {
           
            $id = $_GET['id'];
            $DepartmentService = new DepartmentService();
            $departmentid = $DepartmentService->getDepartmentById($id);
            $data['departmentID'] = $departmentid->getDepartmentID();
            $data['departmentName'] = $departmentid->getDepartmentName();
            $data['address'] = $departmentid->getAddress();
            $data['email'] = $departmentid->getEmail();
            $data['phone'] = $departmentid->getPhone();
            $data['logo'] = $departmentid->getLogo();
            $data['website'] = $departmentid->getWebsite();
            $data['parentDepartment'] = $departmentid->getParentDepartment();

            include ('views/departments/editdepartment.php');
        }

    } 
    function addDepartment($departmentName, $address, $email, $phone, $logo, $website, $parentDepartment) {
      
        if (empty($departmentName) || empty($address) || empty($email) || empty($phone) || empty($logo) || empty($website) || empty($parentDepartment)) {
            echo '<p style="color: red; margin-top:30px; margin-bottom:0;">Bạn phải điền đầy đủ thông tin và điền chính xác parentDepartment</p>';
            return false;
        }
    
        $conn = connectDB();
        $sql = "INSERT INTO departments (departmentName, address, email, phone, logo, website, parentDepartmentID) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
    
        mysqli_stmt_bind_param($stmt, "sssssss", $departmentName, $address, $email, $phone, $logo, $website, $parentDepartment);
    
        $result = mysqli_stmt_execute($stmt);
    
        mysqli_stmt_close($stmt);
    
        return $result;
    }
    
      
}