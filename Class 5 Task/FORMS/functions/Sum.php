<?php
$inputNumber1 = 0;
$inputNumber2 = 0;

if (isset($_GET["num1"]) && ($_GET["num1"] != 0)) {
    $inputNumber1 = $_GET["num1"];
} else {
    $inputNumber1 = 0;
}
if (isset($_GET["num2"]) && ($_GET["num2"] != 0)) {
    $inputNumber2 = $_GET["num2"];
} else {
    $inputNumber2 = 0;;
}
$totalSum = $inputNumber1 + $inputNumber2;
