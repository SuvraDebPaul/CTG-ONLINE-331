<?php
include "Registration.php";
include "Getter & Seeter.php";
include "SuperHero.php";
include "laptop.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="milligram.min.css">
    <title>CTG ONLINE 331 - ASSIGNMENT-1</title>
    <style>
        .Q {
            color: black;
            font-style: normal;
        }

        h2 {
            color: darkblue;
            font-style: italic;
        }
    </style>
</head>

<body class="container">

    <h2 class="Q">1. Make a Class Named "Registration", print out your name by calling constructor method
        with $firstname, $lastname parameters.</h2>
    <h2>
        <?php
        $MyName = new Registration("Suvra Deb", "Paul");
        ?>
    </h2>
    <h2>
        <?php $MyName->getFullName("Suvra Deb", "Paul"); ?>
    </h2>
    <br>

    <h2 class="Q">2. Take a CLASS and a private variable named "$key", now set the $key value by passing setter method and print it via getter method.</h2>

    <?php $b = new setterGetter();    ?>
    <h2> <?php $b->getKey(); ?> </h2>
    <h2><?php $b->setKey("I am Authorized Variable After Setter"); ?></h2>
    <h2><?php $b->getKey(); ?></h2>

    <br>

    <h2 class="Q">3. Make a Class SuperPower. There will be many kind of super power methods in the class. Like Flying , LaserEye etc. Now Make more classes like IronMan, CaptainAmerica, Thor. Inherit the SuperPower Class by the following classes. Now print all the proper power method from the index.php</h2>

    <h2><?php
        $SuperHero = new Thor();
        echo $SuperHero->Lightning("Thor");
        ?>
    </h2>

    <h2><?php
        $SuperHero = new ironMan();
        echo $SuperHero->Flying("Iron Man");
        ?>
    </h2>

    <h2 class="Q">4. Make an abstract class named "Electronics", put an abstract method named "powerSupply()". Now take another class named Laptop. Put methods like "processPower, motherBoard " etc Now inherit the Electronics class to Laptop class and implement the abstract method of Electronics class. Finally print all the methods via index.php</h2>

    <h2><?php $HpLaptop = new laptop();
        $HpLaptop->processorPower(12); ?>
        <h2><?php $HpLaptop->motherBoard(24); ?> </h2>
        <h2><?php $HpLaptop->powerSupply(36); ?> </h2>

</body>

</html>