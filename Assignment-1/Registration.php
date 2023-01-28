<?php

class Registration
{
    public function __construct($firstname, $lastname)
    {

        echo "I am From Construct Function & My Full Name is " . $firstname . " " . $lastname;
    }

    public function getFullName($fName, $lName)
    {
        echo "I am From Function Method & My Full Name is {$fName} {$lName}";
    }
}
