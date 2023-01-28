<?php
@include "SuperPower.php";

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

class setterGetter
{

    private $key = "I am Private Variable";

    public function getKey()
    {
        echo "The Key Value is : " . $this->key;
    }
    public function setKey($newKey)
    {
        $this->key = $newKey;
    }
}

class Thor extends SuperPower
{
    public function thor()
    {
        echo "I am Thor";
    }
};

class ironMan extends SuperPower
{
    public function IronMan()
    {
        echo "I am Ironman ";
    }
};

class captainAmerica extends SuperPower
{
    public function CapAmerica()
    {
        echo "I am Captain America";
    }
}

abstract class Electronics
{
    abstract public function powerSupply($pS);
};

class laptop extends Electronics
{

    public function processorPower($proPower)
    {
        echo "Processor Power Need " . $proPower . " Volts DC";
    }
    public function motherBoard($mBordPower)
    {
        echo "Mother Board Power Need " . $mBordPower . " Volts DC";
    }
    public function powerSupply($pS)
    {
        echo "Total Power Supply for Processor and Mother board Requirements : " . $pS . " Volts DC";
    }
}
