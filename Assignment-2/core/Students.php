<?php

@include "Database.php";

class Students extends Database
{

    public function findAllStudents()
    {
        $sql = "SELECT studentsinfo.id,studentsinfo.name,studentsinfo.gender,studentsinfo.class,studentsinfo.section,studentsinfo.roll,studentsresult.total FROM studentsinfo RIGHT JOIN studentsresult ON studentsinfo.id = studentsresult.studentid ORDER BY class,section,roll";
        $statement = $this->conn->query($sql);
        return $statement->fetchAll();
    }
    public function searchStudent($name, $class, $section, $roll)
    {
        if ($name && $class && $section && $roll) {
            $sql = "SELECT studentsinfo.id,studentsinfo.name,studentsinfo.gender,studentsinfo.class,studentsinfo.section,studentsinfo.roll,studentsresult.total FROM studentsinfo RIGHT JOIN studentsresult ON studentsinfo.id = studentsresult.studentid WHERE (studentsinfo.name = '$name' AND studentsinfo.class = '$class' AND studentsinfo.section = '$section') AND studentsinfo.roll = '$roll';";
        } elseif (($name && $class && $section) || ($name && $class && $roll) || ($class && $section && $roll)) {
            $sql = "SELECT studentsinfo.id,studentsinfo.name,studentsinfo.gender,studentsinfo.class,studentsinfo.section,studentsinfo.roll,studentsresult.total FROM studentsinfo RIGHT JOIN studentsresult ON studentsinfo.id = studentsresult.studentid 
            WHERE (studentsinfo.name = '$name' AND studentsinfo.class = '$class' AND studentsinfo.section = '$section') 
            OR (studentsinfo.name = '$name' AND studentsinfo.class='$class'AND studentsinfo.roll = '$roll') 
            OR (studentsinfo.class='$class' AND studentsinfo.section='$section' AND studentsinfo.roll='$roll');";
        } elseif (($name && $class) || ($name && $section) || ($name && $roll) || ($class && $section) || ($class && $roll) || ($section && $roll)) {
            $sql = "SELECT studentsinfo.id,studentsinfo.name,studentsinfo.gender,studentsinfo.class,studentsinfo.section,studentsinfo.roll,studentsresult.total FROM studentsinfo RIGHT JOIN studentsresult ON studentsinfo.id = studentsresult.studentid 
            WHERE (studentsinfo.name = '$name' AND studentsinfo.class = '$class') 
            OR (studentsinfo.name = '$name' AND studentsinfo.section = '$section') 
            OR (studentsinfo.name = '$name' AND studentsinfo.roll = '$roll') 
            OR (studentsinfo.class='$class' AND studentsinfo.section='$section') 
            OR (studentsinfo.class='$class' AND studentsinfo.roll='$roll') 
            OR (studentsinfo.section='$section' AND studentsinfo.roll='$roll');";
        } elseif ($name || $class || $section || $roll) {
            $sql = "SELECT studentsinfo.id,studentsinfo.name,studentsinfo.gender,studentsinfo.class,studentsinfo.section,studentsinfo.roll,studentsresult.total FROM studentsinfo RIGHT JOIN studentsresult ON studentsinfo.id = studentsresult.studentid WHERE studentsinfo.name = '$name' OR studentsinfo.class = '$class'OR studentsinfo.section = '$section' OR studentsinfo.roll = '$roll' ;";
        }
        $statement = $this->conn->query($sql);
        return $statement->fetchAll();
    }
    public function addStudent()
    {
    }
    public function updateStudent()
    {
    }
    public function deleteStudent()
    {
    }
}

// $students = new Students();
// $allStudents = $students->searchStudent('', '6', '', '');
// print_r($allStudents);
// foreach ($allStudents as $student) {
//     print_r($student);
// }
