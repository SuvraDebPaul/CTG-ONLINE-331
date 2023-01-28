<?php
$firstName = "";
$lastName = "";
$age = 0;
$gender = "";
$defaultGenderM = "";
$defaultGenderF = "";

if (isset($_POST['fName']) && ($_POST['fName'] != '')) {
    $firstName = $_POST['fName'];
}
if (isset($_POST['lName']) && ($_POST['lName'] != '')) {
    $lastName = $_POST['lName'];
}
if (isset($_POST["age"]) && ($_POST["age"] != 0)) {
    $age = $_POST["age"];
} else {
    $age = 0;
}
if (isset($_POST['gender']) && ($_POST['gender'] == 'Male')) {
    $gender = "Male";
    $defaultGenderM = "checked";
} elseif (isset($_POST['gender']) && ($_POST['gender'] == 'Female')) {
    $gender = "Female";
    $defaultGenderF = "checked";
} else {
    $gender = "";
    $defaultGenderM = "";
    $defaultGenderF = "";
}
