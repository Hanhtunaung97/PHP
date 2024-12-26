<?php

class Square extends Shape
{
    public function area(float $a): float
    {
        return $a * $a;
    }
    public function showName(): string
    {
        return "this is square area";
    }
}
