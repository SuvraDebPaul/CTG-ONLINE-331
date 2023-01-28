<?php
include "absElectronics.php";


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
