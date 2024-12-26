<?php

class Circle extends Shape
{
    public function area(float $a): float
    {
        return pi() * $a * $a;
    }
    public function showName(): string
    {
        return "this is square area";
    }
}
