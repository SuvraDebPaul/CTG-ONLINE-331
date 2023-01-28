<?php
// 1. Find Max number between 3 numbers
$maxNumber1 = 12;
$maxNumber2 = 23;
$maxNumber3 = 21;
// Using Math Function 
echo ("Max Number Between {$maxNumber1}, {$maxNumber2}, {$maxNumber3} = " . max($maxNumber1, $maxNumber2, $maxNumber3) . "\n");

echo PHP_EOL;
// 2. Find even or odd from a number 
// 4. Make a function that will take parameter a number and print out if it is even or odd
function isEven($number)
{
    ($number % 2 == 0) ? printf("{$number} is an Even Number ")  : printf("{$number} is a Odd Number ");
}
isEven(14);
echo PHP_EOL;

// 3. Take 3 names of your friends, find the shortest name , if the name's length is odd, print the name with "you are different", if even print name with "you are general".

$fName1 = "Abdul Momin";
$fName2 = "Nazmuj Sakib";
$fName3 = "Amanullah";
$shortestName = "";
function shortNameCheck($name1, $name2, $name3)
{
    ((strlen($name1) < strlen($name2)) && (strlen($name1) < strlen($name3))) ? ($shortestName = $name1) : ((strlen($name2) < strlen($name3)) ?  $shortestName = $name2 :  $shortestName = $name3);
    echo $shortestName . "\n";
    evenOddLengthCheck($shortestName);
};
function evenOddLengthCheck($shortestName)
{
    $nameLength = strlen($shortestName);
    ($nameLength % 2 == 0) ? printf("{$shortestName} you are general \n")  :  printf("{$shortestName} you are different \n");
}
shortNameCheck($fName1, $fName2, $fName3);
echo PHP_EOL;


// 5. Make two functions that sum and subtract two numbers and print it.
function addSum($number1, $number2)
{
    $addsum = $number1 + $number2;
    printf($addsum . "\n");

    subSum($number1, $number2);
}
function subSum($number1, $number2)
{
    $subsum = $number1 - $number2;
    printf($subsum . "\n");
}
addSum(12, 87);
echo PHP_EOL;

// 6. Print 20 to 10 reversely by for loop
function reverseLoop($startPoint, $endPoint)
{
    for ($i = $startPoint; $i >= $endPoint; $i--) {
        echo "$i \n";
    }
}
reverseLoop(20, 10);
echo PHP_EOL;

//7. Make multiplication table (নামাতা) for 40 to 45 using nested loop.

function multiplicationTable($startNumber, $endNumber)
{
    for ($i = $startNumber; $i <= $endNumber; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i" . " x " . "$j" . " = " . "$result\n";
        }
    }
}
multiplicationTable(40, 42);
echo PHP_EOL;

// 8. Suppose you want to arrange a party at your house. You have 10 friends on your list. (Take random 10 names in the array). Due to money shortage, you want to invite only those friends  who's name has not more than 5 Characters. So write a program to sort out those friends' names from the array and print them using loop.

$friendsArray = ["Md Amanullah", "Nazmhj Shakib", "Tanim Islam", "Abdul Momin", "Md Limon Mia", "Md Parvez Hossen", "Md Ahmed", "Md Polash", "Md Shakib", "Noman"];
//Using For Each Loop 
function friendsNameChecker($friendsArray)
{
    foreach ($friendsArray as $friends) {
        $friendLength = strlen($friends);
        if ($friendLength < 10) {
            echo $friends . "\n";
        }
    }
}
friendsNameChecker($friendsArray);

echo PHP_EOL;

//Using For Loop 
$arrylength = count($friendsArray);
for ($i = 0; $i < $arrylength; $i++) {
    $friendslength = strlen($friendsArray[$i]);
    if ($friendslength < 10) {
        echo $friendsArray[$i] . "\n";
    }
}
