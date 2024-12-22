<?php

class Phone
{
    public $brand;
    public $model;

    public function makeDial()
    {
        return $this->brand . " can make a phone call";
    }
    public function textMessage()
    {
        return $this->brand . " can text a message";
    }
}
