<?php
include (ROOT."/models/Employee.php");
include (ROOT."/config/database.php");
class EmployeeService{

    public function getEmployeeName($Fullname) {
        $conn = connectDB();
        $sql = "select * from employees where fullname like '%$Fullname%'";
        $result = $conn->query($sql);
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
    public function getEmployee() {
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
    public function getEmployeeByDepartmentId($id) {
            $conn = connectDB();
            $sql = "SELECT * FROM employees WHERE departmentID = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
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
            mysqli_stmt_close($stmt);
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
            $obj_employee  = new Employee($employee['employeeID'], $employee['fullname'], $employee['address'], $employee['email'],$employee['mobilephone'], $employee['position'], $employee['avatar'], $employee['departmentID']);
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
    public function getdepartmentId($name) {
            $conn = connectDB();
            $sql = "SELECT departmentID FROM departments WHERE departmentName = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $name); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $departmentId = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_stmt_close($stmt);
            return $departmentId;
        }
    public function getdepartmentNames() {
            $conn = connectDB();
            $sql = "SELECT departmentName FROM departments";
            $result = mysqli_query($conn, $sql);
            $employees = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $employees[] = $row;
            }
            mysqli_free_result($result);
            return $employees;
        }
    public function addEmployee($name, $address, $email, $mobilephone, $position, $avatar, $department_id) {
            $conn = connectDB();
            $sql = "INSERT INTO employees (fullname, address, email, mobilephone, position, avatar, departmentID) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            if (!$stmt) {
                return false;
            }
            mysqli_stmt_bind_param($stmt, "ssssssi", $name, $address, $email, $mobilephone, $position, $avatar, $department_id);
            $result = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
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
        $sql = "DELETE FROM employees WHERE employeeID = ?";
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