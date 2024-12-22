<?php

function autoLoader($className)
{
    $path = __DIR__ . "/classes/" . str_replace("\\", "/", $className) . ".php";

    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register("autoLoader");
