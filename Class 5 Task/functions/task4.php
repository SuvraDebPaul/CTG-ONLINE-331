<?php
$filePath = "D:\CTG-ONLINE-331\Class 5 Task\Assets\Uploded Files\action.txt";

if (is_readable($filePath)) {
    $datas = file($filePath);
    $AuthorisedEntry = 0;
    $noValidInput = '';
    if (isset($_POST['task-4'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        if (isset($userName) && isset($password) && $userName !== '' && $password !== '') {
            foreach ($datas as $data) {
                //echo $data;
                $userInfo = explode(",", $data);
                // print_r($userInfo);
                if ($userName == $userInfo[0] && $password == $userInfo[1]) {
                    $AuthorisedEntry += 1;
                }
            }
        } else {
            $noValidInput = "Please Provide User Name And Password";
        }
    }
}

$allowedFileTypes = ["image/png", "image/jpg", "image/jpeg"];
if ($_FILES['file']) {
    if (in_array($_FILES['file']['type'], $allowedFileTypes) !== false) {
        move_uploaded_file($_FILES['file']['tmp_name'], "Assets/Uploded Files" . $_FILES['file']['name']);
    }
}
