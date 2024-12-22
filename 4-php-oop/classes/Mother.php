<?php

class Mother
{
    public $a;
    protected $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function x()
    {
        return "xxx";
    }
    protected function y()
    {
        return "yyy";
    }
    private function z()
    {
        return "zzz";
    }
}
