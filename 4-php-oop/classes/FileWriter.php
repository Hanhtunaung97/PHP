<?php

class FileWriter
{
    private $fileHandle;
    public function __construct($fileName)
    {
        return $this->fileHandle = fopen($fileName, "a+");
    }

    public function fileWrite($content)
    {
        return fwrite($this->fileHandle, $content);
    }

    public function __destruct()
    {
        fclose($this->fileHandle);
    }
}
