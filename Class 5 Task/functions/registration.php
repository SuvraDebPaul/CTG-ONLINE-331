<?php
$userName = '';
$userPass = '';
$userNote = '';
$passNote = '';
$userPasNote = '';


if (isset($_REQUEST['userName']) && ($_REQUEST['userName'] != '')) {
    $userLength = strlen($_REQUEST['userName']);
    if ($userLength > 5) {
        $userName = $_REQUEST['userName'];
        $userNote = "Username Character Requirement is Marched";
    } else {
        $userNote = "Username Must Be At Least 6 character But You Have Entered " . $userLength . " Character";
    }
}
if (isset($_REQUEST['password']) && ($_REQUEST['password'] != '')) {
    $passLen = strlen($_REQUEST['password']);
    if ($passLen > 7) {
        $userPass = $_REQUEST['password'];
        $passNote = "Password Character Requirement is Marched";
    } else {
        $passNote = "Password length Must be At Least 8 But Your Have Entered " . $passLen;
    }
}

if (isset($_REQUEST['userName']) && ($_REQUEST['userName'] != '') &&  isset($_REQUEST['password']) && ($_REQUEST['password'] != '')) {
    echo "OK";
} else {
    $userPasNote = "User Name And Password Must Be Filled";
}
