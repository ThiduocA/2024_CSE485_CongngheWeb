<?php 
include (ROOT."/models/Department.php");
include (ROOT."/config/database.php");
class DepartmentService {
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
    function getDepartmentById($id) {
        $conn = connectDB();
        $sql = "SELECT * FROM departments WHERE departmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $department = mysqli_fetch_assoc($result);
        $departments = array();
        $obj_departments = [];
        foreach($departments as $department){
            $obj = new department($department['departmentID'], $department['departmentName'], $department['address'], $department['email'],$department['phone'], $department['logo'], $department['website'], $department['parentDepartmentID']);
            $obj_departments[] = $obj;
            // array_push($obj_posts, $obj);
        }
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $obj_departments;
       }
       
    function updateDepartment($id, $departmentName, $address) {
        $conn = connectDB();
        $sql = "UPDATE departments SET departmentName = ?, address = ? WHERE departmentID =
       ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $departmentName, $address, $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
       
    function addDepartment($departmentName, $address) {
        $conn = connectDB();
        $sql = "INSERT INTO departments (departmentName, address) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $departmentName, $address);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    // function deleteDepartment($id) {
    //     $conn = connectDB();
    //     try {
    //         // Tắt chế độ kiểm tra ràng buộc khóa ngoại
    //         mysqli_autocommit($conn, false);
    //         mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
    
    //         // Xóa phòng ban
    //         $sql = "DELETE FROM departments WHERE departmentID = ?";
    //         $stmt = mysqli_prepare($conn, $sql);
    //         mysqli_stmt_bind_param($stmt, "i", $id);
    //         $result = mysqli_stmt_execute($stmt);
    
    //         // Bật lại chế độ kiểm tra ràng buộc khóa ngoại
    //         mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");
    //         mysqli_commit($conn);
            
    //         mysqli_stmt_close($stmt);
    //         return $result;
    //     } catch (Exception $e) {
    //         mysqli_rollback($conn);
    //         throw $e;
    //     } finally {
    //         mysqli_autocommit($conn, true);
    //     }
    // }
    function deleteDepartment($id) {
        $conn = connectDB();
        $sql = "DELETE FROM departments WHERE departmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
       
 

}

?>