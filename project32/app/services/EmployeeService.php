<?php
include (ROOT."/models/Employee.php");
include (ROOT."/config/database.php");
class EmployeeService{
    public function getAllEmployee() {
        $conn = connectDB();
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        $employees = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
        mysqli_free_result($result);
        $obj_employees = [];
        foreach($employees as $employee){
            $obj = new Employee($employee['employeeID'], $employee['fullname'], $employee['address'], $employee['email'],$employee['mobilephone'], $employee['position'], $employee['avatar'], $employee['departmentID']);
            $obj_employees[] = $obj;
            // array_push($obj_posts, $obj);
        }
        return $obj_employees;
        }
    public function getEmployeeById($id) {
            $conn = connectDB();
            $sql = "SELECT * FROM employees WHERE employeeID = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $employee = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            $obj_employee =[];
            $obj_employee[] = new Employee($employee['employeeID'], $employee['fullname'], $employee['address'], $employee['email'],$employee['mobilephone'], $employee['position'], $employee['avatar'], $employee['departmentID']);
            mysqli_stmt_close($stmt);
            return $obj_employee;
        }
    public function getEmployeeId($Fullname) {
            $conn = connectDB();
            $sql = "SELECT employeeID FROM employees WHERE fullname = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $Fullname); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $employeeID = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_stmt_close($stmt);
            return $employeeID;
        }
    public function getdepartmentName($id) {
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
    public function addEmployee($name, $email, $department_id) {
        $conn = connectDB();
        $sql = "INSERT INTO employees (name, email, department_id) VALUES (?, 
       ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $department_id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
       }
    public function updateEmployee($id, $name, $email, $department_id) {
        $conn = connectDB();
        $sql = "UPDATE employees SET name = ?, email = ?, department_id = ? 
       WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssii", $name, $email, $department_id, 
       $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
       }
    public function deleteEmployee($id) {
        $conn = connectDB();
        $sql = "DELETE FROM employees WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
       }
    public function isEmployeeExist($id) {
        $conn = connectDB();
        $sql = "SELECT COUNT(*) FROM employees WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_fetch_row($result)[0];
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $count > 0;
       }
}