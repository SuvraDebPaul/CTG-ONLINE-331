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
}

// $students = new Students();
// $allStudents = $students->findAllStudents();
// //print_r($allStudents);
// foreach ($allStudents as $student) {
//     print_r($student);
// }
