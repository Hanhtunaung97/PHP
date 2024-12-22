<?php

class Child extends Mother
{
    public $d;
    public $e;
    public function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a, $b, $c);
        $this->d = $d;
        $this->e = $e;
    }
    public function x()
    {
        return "xxxxxxx";
    }
}
