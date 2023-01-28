<?php
@include "SuperPower.php";

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
