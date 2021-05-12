<?php
include_once "../model/connect.php";
class Student {
    private $studentID;
    private $studentName;
    private $dateOfBirth;
    private $faculty;
    private $class;
    private $password;
    public function __construct($studentID, $studentName, $dateOfBirth, $faculty, $class, $password) {
        $this->studentID = $studentID;
        $this->studentName = $studentName;
        $this->dateOfBirth = $dateOfBirth;
        $this->faculty = $faculty;
        $this->class = $class;
        $this->password = $password;
    }
    public function getID() {
        return $this->studentID;
    }
    public function getName() {
        return $this->studentName;
    }
    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }
    public function getFaculty() {
        return $this->faculty;
    }
    public function getClass() {
        return $this->class;
    }
    public function getPassword() {
        return $this->password;
    }

    public function updateName($name): bool
    {
        if (empty($name)) return false;
        $updateQuery = "UPDATE students SET studentName ='$name' WHERE studnentID = '$this->studentID'";
        if ($this->connect->query($updateQuery) == true) return true;
        return false;
    }
    public function updateBirthday($birthday): bool
    {
        if (empty($birthday)) return false;
        $updateQuery = "UPDATE students SET dateOfBirth ='$birthday' WHERE studnentID = '$this->studnentID'";
        if ($this->connect->query($updateQuery) ==  true) return true;
        return false;
    }
    public function updateSchoolYear($schoolYear): bool
    {
        if (empty($authorName)) return false;
        $updateQuery = "UPDATE students SET faculty ='$schoolYear' WHERE studnentID = '$this->studnentID'";
        if ($this->connect->query($updateQuery) ==  true) return true;
        return false;
    }
    public function updateClass($class): bool
    {
        $updateQuery = "UPDATE students SET class = '$class' WHERE studnentID = '$this->studnentID'";
        if ($this->connect->query($updateQuery) ==  true) return true;
        return false;
    }
}