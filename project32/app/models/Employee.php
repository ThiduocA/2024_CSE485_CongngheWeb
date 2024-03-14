<?php

class Employee{
    private $id;
    private $fullname;
    private $address;
    private $email;
    private $mobilephone;
    private $position;
    private $avatar;
    private $departmentID;

    public function __construct($id, $fullname, $address, $email, $mobilephone, $position, $avatar, $departmentID){
        $this->id = $id;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->email = $email;
        $this->mobilephone = $mobilephone;
        $this->position = $position;
        $this->avatar = $avatar;
        $this->departmentID = $departmentID;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getFullname(){
        return $this->fullname;
    }
    public function setFullname($fullname){
        $this->fullname = $fullname;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getMobilephone(){
        return $this->mobilephone;
    }
    public function setMobilephone($mobilephone){
        $this->mobilephone = $mobilephone;
    }
    public function getPosition(){
        return $this->position;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function getAvatar(){
        return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    public function getDepartmentID(){
        return $this->departmentID;
    }
    public function setDepartmentID($departmentID){
        $this->departmentID = $departmentID;
    }
}
