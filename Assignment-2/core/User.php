<?php
@include "Database.php";

class User extends Database
{

    public function userStudent($username, $password)
    {
        $sql = "INSERT INTO studentuser(username,password) VALUES('$username','$password')";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    }

    public function checkUserStudent($username)
    {
        $sql = "SELECT username FROM studentuser WHERE username='$username'";
        $statement = $this->conn->query($sql);
        return $statement->fetchAll();
    }
    public function checkUserStudentCredential($username, $password)
    {
        $sql = "SELECT username,password FROM studentuser WHERE username='$username' AND password='$password'";
        $statement = $this->conn->query($sql);
        return $statement->fetchAll();
    }
}
