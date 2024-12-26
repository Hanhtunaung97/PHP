<?php

interface Player
{
    public function loadMedia();
    public function play();
    public function stop();
    public function pause();
    public function forward();
    public function rewind();
}
