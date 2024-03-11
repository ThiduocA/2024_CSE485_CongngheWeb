<?php

class User
{
    private $username;
    private $password;
    private $role;
    private $employeeID;

    public function __construct($username, $password, $role, $employeeID)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->employeeID = $employeeID;
    }


    /**
     * Get the value of employeeID
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * Set the value of employeeID
     *
     * @return  self
     */
    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}