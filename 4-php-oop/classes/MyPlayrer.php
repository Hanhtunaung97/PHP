<?php

class MyPlayer implements Player, OnlinePlayer
{
    public function loadMedia()
    {
        echo "loading mms\n";
    }
    public function play()
    {
        echo "playing mms\n";
    }
    public function stop()
    {
        echo "stopping mms\n";
    }
    public function pause()
    {
        echo "pausing mms\n";
    }
    public function forward()
    {
        echo "forwarding mms\n";
    }
    public function rewind()
    {
        echo "rewinding mms\n";
    }
    public function share()
    {
        echo "sharing mms\n";
    }
    public function download()
    {
        echo "downloading mms\n";
    }
    public function upload()
    {
        echo "uploading mms\n";
    }
}
