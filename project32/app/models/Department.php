<?php

class Department {
    private $departmentID;
    private $departmentName;
    private $address;
    private $email;
    private $phone;
    private $logo;
    private $website;
    private $parentDepartment;

    public function __construct($departmentID, $departmentName, $address, $email, $phone , $logo , $website , $parentDepartment = null){
        $this->departmentID = $departmentID;
        $this->departmentName = $departmentName;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->logo = $logo;
        $this->website = $website;
        $this->parentDepartment = $parentDepartment;
    }

    // Getter methods
    public function getDepartmentID() {
        return $this->departmentID;
    }

    public function getDepartmentName() {
        return $this->departmentName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function getParentDepartment() {
        return $this->parentDepartment;
    }

    // Setter methods
    public function setDepartmentID($departmentID) {
        $this->departmentID = $departmentID;
    }

    public function setDepartmentName($departmentName) {
        $this->departmentName = $departmentName;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

    public function setParentDepartment($parentDepartment) {
        $this->parentDepartment = $parentDepartment;
    }
}
?>
