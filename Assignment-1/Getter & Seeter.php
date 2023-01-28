<?php

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
