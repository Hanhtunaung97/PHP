<?php

class Person
{
    public $name;
    public $age;
    public $gender;
    function __construct($name, $age, $gender)
    {
        // echo "I am constructor";
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function speak($lang = "english")
    {
        return $this->name . " can speak " . $lang . " language";
    }

    public function learn($what)
    {
        return $this->name . " can learn " . $what;
    }
    function __destruct()
    {
        // echo "I am destructor";
    }
}
